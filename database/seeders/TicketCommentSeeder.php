<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\TicketComment;
use App\Models\User;
use Illuminate\Database\Seeder;

class TicketCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'ticket_number' => 1001,
                'user_email' => 'maria.oliveira@supportdesk.test',
                'body' => 'O computador não liga desde hoje cedo. Já tentei trocar de tomada, mas o problema continua.',
                'is_internal' => false,
            ],
            [
                'ticket_number' => 1001,
                'user_email' => 'carlos.tecnico@supportdesk.test',
                'body' => 'Verificar fonte de alimentação e cabo de energia. Possível problema físico no equipamento.',
                'is_internal' => true,
            ],
            [
                'ticket_number' => 1001,
                'user_email' => 'carlos.tecnico@supportdesk.test',
                'body' => 'Chamado recebido. Estou indo até o setor financeiro para verificar o equipamento.',
                'is_internal' => false,
            ],
            [
                'ticket_number' => 1002,
                'user_email' => 'maria.oliveira@supportdesk.test',
                'body' => 'O erro acontece sempre que tento acessar a tela de lançamentos do sistema financeiro.',
                'is_internal' => false,
            ],
            [
                'ticket_number' => 1002,
                'user_email' => 'ana.suporte@supportdesk.test',
                'body' => 'Problema pode estar relacionado à permissão do usuário ou instabilidade no módulo financeiro.',
                'is_internal' => true,
            ],
            [
                'ticket_number' => 1002,
                'user_email' => 'ana.suporte@supportdesk.test',
                'body' => 'Estou analisando o acesso ao sistema financeiro e retorno com uma atualização em breve.',
                'is_internal' => false,
            ],
            [
                'ticket_number' => 1004,
                'user_email' => 'pedro.santos@supportdesk.test',
                'body' => 'A impressora trava principalmente quando tento imprimir documentos com muitas páginas.',
                'is_internal' => false,
            ],
            [
                'ticket_number' => 1004,
                'user_email' => 'ana.suporte@supportdesk.test',
                'body' => 'Verificar fila de impressão, driver instalado e possível necessidade de manutenção preventiva.',
                'is_internal' => true,
            ],
            [
                'ticket_number' => 1005,
                'user_email' => 'camila.rocha@supportdesk.test',
                'body' => 'Não consigo acessar meu e-mail corporativo desde ontem. A senha não é aceita.',
                'is_internal' => false,
            ],
            [
                'ticket_number' => 1008,
                'user_email' => 'camila.rocha@supportdesk.test',
                'body' => 'A rede está muito lenta no setor financeiro, principalmente ao acessar sistemas compartilhados.',
                'is_internal' => false,
            ],
        ])->each(function (array $comment): void {
            $ticket = Ticket::where('number', $comment['ticket_number'])->firstOrFail();
            $user = User::where('email', $comment['user_email'])->firstOrFail();

            TicketComment::updateOrCreate(
                [
                    'ticket_id' => $ticket->id,
                    'user_id' => $user->id,
                    'body' => $comment['body'],
                ],
                [
                    'is_internal' => $comment['is_internal'],
                ]
            );
        });
    }
}