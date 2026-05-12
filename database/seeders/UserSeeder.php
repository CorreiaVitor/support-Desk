<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administratorProfile = Profile::where('name', 'Administrador')->firstOrFail();
        $technicianProfile = Profile::where('name', 'Técnico')->firstOrFail();
        $commonUserProfile = Profile::where('name', 'Usuário comum')->firstOrFail();
        $supervisorProfile = Profile::where('name', 'Supervisor')->firstOrFail();

        collect([
            [
                'name' => 'Vitor Correia',
                'email' => 'joao.admin@supportdesk.test',
                'password' => Hash::make('password'),
                'profile_id' => $administratorProfile->id,
                'department' => 'TI',
                'is_active' => true,
            ],
            [
                'name' => 'João Neves',
                'email' => 'carlos.tecnico@supportdesk.test',
                'password' => Hash::make('password'),
                'profile_id' => $technicianProfile->id,
                'department' => 'Suporte',
                'is_active' => true,
            ],
            [
                'name' => 'Ana Beatriz',
                'email' => 'ana.suporte@supportdesk.test',
                'password' => Hash::make('password'),
                'profile_id' => $technicianProfile->id,
                'department' => 'Suporte',
                'is_active' => true,
            ],
            [
                'name' => 'Fernanda Silva',
                'email' => 'fernanda.supervisora@supportdesk.test',
                'password' => Hash::make('password'),
                'profile_id' => $supervisorProfile->id,
                'department' => 'Gestão de Suporte',
                'is_active' => true,
            ],
            [
                'name' => 'Maria Oliveira',
                'email' => 'maria.oliveira@supportdesk.test',
                'password' => Hash::make('password'),
                'profile_id' => $commonUserProfile->id,
                'department' => 'Financeiro',
                'is_active' => true,
            ],
            [
                'name' => 'Pedro Santos',
                'email' => 'pedro.santos@supportdesk.test',
                'password' => Hash::make('password'),
                'profile_id' => $commonUserProfile->id,
                'department' => 'Comercial',
                'is_active' => true,
            ],
            [
                'name' => 'Camila Rocha',
                'email' => 'camila.rocha@supportdesk.test',
                'password' => Hash::make('password'),
                'profile_id' => $commonUserProfile->id,
                'department' => 'Financeiro',
                'is_active' => true,
            ],
        ])->each(function (array $user): void {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        });
    }
}