<?php

namespace Database\Seeders;

use App\Models\TicketStatus;
use Illuminate\Database\Seeder;

class TicketStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Aberto',
                'description' => 'Chamado criado e aguardando análise inicial.',
                'sort_order' => 1,
                'is_final' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Em andamento',
                'description' => 'Chamado atribuído e em atendimento por um técnico.',
                'sort_order' => 2,
                'is_final' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Aguardando usuário',
                'description' => 'Atendimento pausado aguardando retorno ou informação do solicitante.',
                'sort_order' => 3,
                'is_final' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Resolvido',
                'description' => 'Chamado solucionado pela equipe de suporte.',
                'sort_order' => 4,
                'is_final' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Cancelado',
                'description' => 'Chamado cancelado por duplicidade, erro de abertura ou solicitação inválida.',
                'sort_order' => 5,
                'is_final' => true,
                'is_active' => true,
            ],
        ])->each(function (array $ticketStatus): void {
            TicketStatus::updateOrCreate(
                ['name' => $ticketStatus['name']],
                $ticketStatus
            );
        });
    }
}