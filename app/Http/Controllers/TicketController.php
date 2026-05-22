<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\Category;
use App\Models\Priority;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
            'comments'
        ])
            ->latest()
            ->get();

        return view('tickets.index', ['tickets' => $tickets]);
    }

    public function create(): View
    {
        $categories = Category::where('is_active', true)->get();
        $priorities = Priority::where('is_active', true)->get();

        return view('tickets.create', compact('categories', 'priorities'));
    }

    public function store(StoreTicketRequest $request)
    {
        return to_route('tickets.index');
    }

    public function show(Ticket $ticket): View
    {

        $ticket->load([
            'requester',
            'technician',
            'category',
            'priority',
            'ticketStatus',
            'comments' => fn($query) => $query->with('user')->oldest(),
        ]);

        return view('tickets.show', ['ticket' => $ticket]);
    }
}
