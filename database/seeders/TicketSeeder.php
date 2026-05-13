<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Ticket;
use App\Models\TicketStatus;
use App\Models\User;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hardwareCategory = Category::where('name', 'Hardware')->firstOrFail();
        $softwareCategory = Category::where('name', 'Software')->firstOrFail();
        $networkCategory = Category::where('name', 'Rede')->firstOrFail();
        $accessCategory = Category::where('name', 'Acessos')->firstOrFail();
        $printerCategory = Category::where('name', 'Impressoras')->firstOrFail();
        $internalSystemsCategory = Category::where('name', 'Sistemas internos')->firstOrFail();

        $lowPriority = Priority::where('name', 'Baixa')->firstOrFail();
        $mediumPriority = Priority::where('name', 'Média')->firstOrFail();
        $highPriority = Priority::where('name', 'Alta')->firstOrFail();
        $criticalPriority = Priority::where('name', 'Crítica')->firstOrFail();

        $openStatus = TicketStatus::where('name', 'Aberto')->firstOrFail();
        $inProgressStatus = TicketStatus::where('name', 'Em andamento')->firstOrFail();
        $waitingUserStatus = TicketStatus::where('name', 'Aguardando usuário')->firstOrFail();
        $resolvedStatus = TicketStatus::where('name', 'Resolvido')->firstOrFail();

        $vitorAdmin = User::where('email', 'Vitor.admin@supportdesk.test')->firstOrFail();
        $joaoTechnician = User::where('email', 'João.tecnico@supportdesk.test')->firstOrFail();
        $anaSupport = User::where('email', 'ana.suporte@supportdesk.test')->firstOrFail();
        $mariaUser = User::where('email', 'maria.oliveira@supportdesk.test')->firstOrFail();
        $pedroUser = User::where('email', 'pedro.santos@supportdesk.test')->firstOrFail();
        $camilaUser = User::where('email', 'camila.rocha@supportdesk.test')->firstOrFail();

        collect([
            [
                'number' => 1001,
                'title' => 'Computador não liga',
                'description' => 'O computador do setor financeiro não liga desde o início do expediente. Ao pressionar o botão de energia, nenhuma luz acende e o equipamento não emite som.',
                'requester_id' => $mariaUser->id,
                'technician_id' => $joaoTechnician->id,
                'category_id' => $hardwareCategory->id,
                'priority_id' => $highPriority->id,
                'ticket_status_id' => $openStatus->id,
            ],
            [
                'number' => 1002,
                'title' => 'Erro ao acessar o sistema financeiro',
                'description' => 'O sistema financeiro exibe uma mensagem de erro ao tentar acessar a tela de lançamentos. O problema impede o fechamento das rotinas do setor.',
                'requester_id' => $mariaUser->id,
                'technician_id' => $anaSupport->id,
                'category_id' => $internalSystemsCategory->id,
                'priority_id' => $criticalPriority->id,
                'ticket_status_id' => $inProgressStatus->id,
            ],
            [
                'number' => 1003,
                'title' => 'Solicitação de novo mouse',
                'description' => 'O mouse atual apresenta falhas no clique esquerdo e dificulta o uso diário do computador.',
                'requester_id' => $pedroUser->id,
                'technician_id' => $joaoTechnician->id,
                'category_id' => $hardwareCategory->id,
                'priority_id' => $lowPriority->id,
                'ticket_status_id' => $resolvedStatus->id,
            ],
            [
                'number' => 1004,
                'title' => 'Impressora travando durante impressão',
                'description' => 'A impressora do setor comercial trava durante impressões maiores e precisa ser reiniciada manualmente.',
                'requester_id' => $pedroUser->id,
                'technician_id' => $anaSupport->id,
                'category_id' => $printerCategory->id,
                'priority_id' => $mediumPriority->id,
                'ticket_status_id' => $inProgressStatus->id,
            ],
            [
                'number' => 1005,
                'title' => 'Usuário sem acesso ao e-mail',
                'description' => 'O usuário não consegue acessar a conta de e-mail corporativo. A senha informada não é aceita e a recuperação não está funcionando.',
                'requester_id' => $camilaUser->id,
                'technician_id' => null,
                'category_id' => $accessCategory->id,
                'priority_id' => $highPriority->id,
                'ticket_status_id' => $openStatus->id,
            ],
            [
                'number' => 1006,
                'title' => 'Atualização de software solicitada',
                'description' => 'Solicitação de atualização do software de planilhas para compatibilidade com arquivos recebidos de fornecedores.',
                'requester_id' => $pedroUser->id,
                'technician_id' => $joaoTechnician->id,
                'category_id' => $softwareCategory->id,
                'priority_id' => $mediumPriority->id,
                'ticket_status_id' => $waitingUserStatus->id,
            ],
            [
                'number' => 1007,
                'title' => 'Solicitação de criação de usuário',
                'description' => 'Solicitação de criação de usuário para novo colaborador do setor financeiro nos sistemas internos da empresa.',
                'requester_id' => $vitorAdmin->id,
                'technician_id' => $anaSupport->id,
                'category_id' => $accessCategory->id,
                'priority_id' => $lowPriority->id,
                'ticket_status_id' => $resolvedStatus->id,
            ],
            [
                'number' => 1008,
                'title' => 'Rede lenta no setor financeiro',
                'description' => 'Usuários do setor financeiro relatam lentidão constante na rede interna e dificuldade para acessar sistemas compartilhados.',
                'requester_id' => $camilaUser->id,
                'technician_id' => null,
                'category_id' => $networkCategory->id,
                'priority_id' => $highPriority->id,
                'ticket_status_id' => $openStatus->id,
            ],
        ])->each(function (array $ticket): void {
            Ticket::updateOrCreate(
                ['number' => $ticket['number']],
                $ticket
            );
        });
    }
}