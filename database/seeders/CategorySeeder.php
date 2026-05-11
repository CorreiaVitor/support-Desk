<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Hardware',
                'description' => 'Problemas físicos em computadores, monitores, teclados, mouses, cabos, fontes e outros equipamentos.',
                'is_active' => true,
            ],
            [
                'name' => 'Software',
                'description' => 'Instalação, atualização ou erro em programas utilizados pela empresa.',
                'is_active' => true,
            ],
            [
                'name' => 'Rede',
                'description' => 'Problemas com internet, conexão interna, Wi-Fi ou lentidão de rede.',
                'is_active' => true,
            ],
            [
                'name' => 'Acessos',
                'description' => 'Solicitações de criação, alteração ou recuperação de acesso a sistemas.',
                'is_active' => true,
            ],
            [
                'name' => 'Impressoras',
                'description' => 'Chamados relacionados a impressoras, filas de impressão e suprimentos.',
                'is_active' => true,
            ],
            [
                'name' => 'Sistemas internos',
                'description' => 'Erros ou dúvidas relacionadas aos sistemas internos da empresa.',
                'is_active' => true,
            ],
        ])->each(function (array $category): void {
            Category::updateOrCreate(
                ['name' => $category['name']],
                $category
            );
        });
    }
}