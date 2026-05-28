<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Ticket;
use App\Models\TicketComment;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class TicketCommentController extends Controller
{
    public function store(Ticket $ticket, CreateCommentRequest $request): RedirectResponse
    {
        //Estou buscando o id do usuário dessa forma, enquando não utilizo autenticação.
       $user = User::where('email', 'maria.oliveira@supportdesk.test')->firstOrFail();

       TicketComment::create(
        [
            'ticket_id' => $ticket->id,
            'user_id' => $user->id,
            'body' => $request->validated('comment'),
            'is_internal' => $request->validated('commentType')
        ]
       );

       return to_route('tickets.show', $ticket->number)->with('success', 'Comentário feito com sucesso!');

    }
}
