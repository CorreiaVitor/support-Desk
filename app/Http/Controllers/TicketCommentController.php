<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketCommentRequest;
use App\Http\Requests\UpdateTicketCommentRequest;
use App\Models\Ticket;
use App\Models\TicketComment;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class TicketCommentController extends Controller
{
    public function store(Ticket $ticket, StoreTicketCommentRequest $request): RedirectResponse
    {
        //Estou buscando o id do usuário dessa forma, enquando não utilizo autenticação.
        $user = User::where('email', 'ana.suporte@supportdesk.test')->firstOrFail();

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

    public function update(UpdateTicketCommentRequest $request, Ticket $ticket, TicketComment $ticketComment): RedirectResponse
    {
        //Estou buscando o id do usuário dessa forma, enquando não utilizo autenticação.
        $user = User::where('email', 'ana.suporte@supportdesk.test')->firstOrFail();

        if ($ticketComment->user_id !== $user->id) {
            return back(302)->with('error', 'Você não pode editar esse comentário.');
        }

        abort_unless($ticketComment->ticket_id === $ticket->id, 404);

        $validated = $request->validated();

        $ticketComment->update([
            'ticket_id' => $ticket->id,
            'user_id' => $user->id,
            'body' => $validated['comment'],
            'is_internal' => $validated['commentType'],
        ]);

        return to_route('tickets.show', $ticket->number)->with('success', 'Comentário alterado com sucesso!');
    }

    public function destroy(Ticket $ticket, TicketComment $ticketComment) : RedirectResponse
    {

        //Estou buscando o id do usuário dessa forma, enquando não utilizo autenticação.
        $user = User::where('email', 'ana.suporte@supportdesk.test')->firstOrFail();

        if ($ticketComment->user_id !== $user->id) {
            return back(302)->with('error', 'Você não pode excluir esse comentário.');
        }

        abort_unless($ticketComment->ticket_id === $ticket->id, 404);

        $ticketComment->delete();

        return to_route('tickets.show', $ticket->number)->with('success', 'Comentário excluido com sucesso!');
    }
}
