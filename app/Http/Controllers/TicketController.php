<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
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

    public function show(Ticket $ticket)
    {

        $ticket->load([
                'requester',
                'technician',
                'category',
                'priority',
                'ticketStatus',
                'comments' => fn ($query) => $query->with('user')->oldest(),
            ]);

        return view('tickets.show', ['ticket' => $ticket]);
    }
}
