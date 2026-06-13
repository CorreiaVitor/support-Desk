<?php

namespace App\Http\Controllers;

use App\Actions\Tickets\CreateTicket;
use App\Http\Requests\StoreTicketRequest;
use App\Models\Category;
use App\Models\Priority;
use App\Models\Ticket;
use App\Models\TicketStatus;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TicketController extends Controller
{
    public function index(): View
    {

        $tickets = Ticket::with([
            'requester',
            'technician',
            'category',
            'priority',
            'ticketStatus',
            'comments',
        ])->get();

        return view('tickets.index', ['tickets' => $tickets]);
    }

    public function create(): View
    {
        $categories = Category::query()->where('is_active', true)->get();
        $priorities = Priority::query()->where('is_active', true)->get();

        return view('tickets.create', compact('categories', 'priorities'));
    }

    public function store(StoreTicketRequest $request, CreateTicket $action): RedirectResponse
    {
        $ticket = $action->handle($request->validated());

        return to_route('tickets.show', $ticket)
            ->with('success', 'Chamado aberto com sucesso.');
    }

    public function show(Ticket $ticket): View
    {

        $ticket->load([
            'requester',
            'technician',
            'category',
            'priority',
            'ticketStatus',
            'comments' => fn ($query) => $query->with('user')->oldest(),
        ]);

        $ticketStatuses = TicketStatus::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $priorities = Priority::query()
            ->where('is_active', true)
            ->orderBy('level')
            ->get();

        $technicians = User::query()
            ->where('is_active', true)
            ->whereHas('profile', fn ($query) => $query->where('name', 'Técnico'))
            ->orderBy('name')
            ->get();

        return view('tickets.show', [
            'ticket' => $ticket,
            'ticketStatuses' => $ticketStatuses,
            'priorities' => $priorities,
            'technicians' => $technicians,
        ]);
    }
}
