<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Administrador',
                'slug' => 'admin',
                'description' => 'Perfil com acesso administrativo ao sistema'
            ],
            [
                'name' => 'Técnico',
                'slug' => 'technician',
                'description' => 'Perfil responsável por atender chamados.',
            ],
            [
                'name' => 'Usuário',
                'slug' => 'user',
                'description' => 'Perfil que pode abrir e acompanhar seus próprios chamados.',
            ],
            [
                'name' => 'Supervisor',
                'slug' => 'supervisor',
                'description' => 'Perfil responsável por acompanhar o andamento dos chamados.',
            ],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['slug' => $role['slug']],
                $role
            );
        }
    }
}
