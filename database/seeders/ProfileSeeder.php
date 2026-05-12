<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Administrador',
                'description' => 'Gerencia usuários, perfis, categorias, prioridades, status e configurações do sistema.',
                'is_active' => true,
            ],
            [
                'name' => 'Técnico',
                'description' => 'Atende chamados, altera status e adiciona comentários técnicos.',
                'is_active' => true,
            ],
            [
                'name' => 'Usuário comum',
                'description' => 'Abre chamados e acompanha suas próprias solicitações.',
                'is_active' => true,
            ],
            [
                'name' => 'Supervisor',
                'description' => 'Acompanha indicadores, técnicos, chamados críticos e desempenho da equipe.',
                'is_active' => true,
            ],
        ])->each(function (array $profile): void {
            Profile::updateOrCreate(
                ['name' => $profile['name']],
                $profile
            );
        });
    }
}