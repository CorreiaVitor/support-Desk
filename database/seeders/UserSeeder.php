<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        $adminRole = Role::where('slug', 'admin')->firstOrFail();
        $technicianRole = Role::where('slug', 'technician')->firstOrFail();
        $userRole = Role::where('slug', 'user')->firstOrFail();
        $supervisorRole = Role::where('slug', 'supervisor')->firstOrFail();

        User::updateOrCreate(
            ['email' => 'admin@supportdesk.test'],
            [
                'name' => 'Admin SupportDesk',
                'email' => 'admin@supportdesk.test',
                'password' => Hash::make('password'),
                'role_id' => $adminRole->id,
            ]
        );

        User::updateOrCreate(
            ['email' => 'tecnico@supportdesk.test'],
            [
                'name' => 'Técnico SupportDesk',
                'email' => 'tecnico@supportdesk.test',
                'password' => Hash::make('password'),
                'role_id' => $technicianRole->id,
            ]
        );

        User::updateOrCreate(
            ['email' => 'usuario@supportdesk.test'],
            [
                'name' => 'Usuário Cliente',
                'email' => 'usuario@supportdesk.test',
                'password' => Hash::make('password'),
                'role_id' => $userRole->id,
            ]
        );

        User::updateOrCreate(
            ['email' => 'supervisor@supportdesk.test'],
            [
                'name' => 'Supervisor SupportDesk',
                'email' => 'supervisor@supportdesk.test',
                'password' => Hash::make('password'),
                'role_id' => $supervisorRole->id,
            ]
        );
    }
}