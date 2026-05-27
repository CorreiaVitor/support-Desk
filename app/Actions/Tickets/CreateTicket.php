<?php

namespace App\Actions\Tickets;

use App\Enums\TicketStatus as EnumsTicketStatus;
use App\Models\Ticket;
use App\Models\TicketStatus;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CreateTicket
{
    
    public function handle(array $validated) 
    {
        $openStatus = TicketStatus::where('name', EnumsTicketStatus::Open)->firstOrFail();

        return DB::transaction(function () use ($validated, $openStatus) {
            $lastTicketNumber = Ticket::query()
                ->lockForUpdate()
                ->max('number') ?? 1000;

                //Irei buscar o usuário no banco, enquanto não utilizo autenticação 
                 $requester = User::where('email', 'maria.oliveira@supportdesk.test')->firstOrFail();

            return Ticket::create([
                'number' => $lastTicketNumber + 1,
                'title' => $validated['title'],
                'category_id' => $validated['category_id'],
                'priority_id' => $validated['priority_id'],
                'description' => $validated['description'],
                'requester_id' => $requester->id, 
                'technician_id' => null,
                'ticket_status_id' => $openStatus->id
            ]);
        });
    }
}
