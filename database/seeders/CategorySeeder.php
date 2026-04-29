<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Executa o seeder de categorias.
     *
     * As categorias servem para classificar os chamados.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Hardware',
                'description' => 'Problemas relacionados a equipamentos físicos.',
                'is_active' => true,
            ],
            [
                'name' => 'Software',
                'description' => 'Problemas relacionados a programas, sistemas e aplicativos.',
                'is_active' => true,
            ],
            [
                'name' => 'Rede',
                'description' => 'Problemas relacionados à internet, conexão ou rede interna.',
                'is_active' => true,
            ],
            [
                'name' => 'Acesso ao sistema',
                'description' => 'Problemas com login, senha ou permissão de acesso.',
                'is_active' => true,
            ],
            [
                'name' => 'Impressora',
                'description' => 'Problemas relacionados a impressão, toner ou configuração de impressoras.',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category['name']],
                $category
            );
        }
    }
}
