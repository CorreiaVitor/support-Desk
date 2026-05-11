<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Baixa',
                'description' => 'Solicitações simples, melhorias ou demandas sem urgência.',
                'level' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Média',
                'description' => 'Problemas que causam dificuldade, mas não impedem totalmente o trabalho.',
                'level' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Alta',
                'description' => 'Problemas importantes que afetam diretamente o trabalho do usuário.',
                'level' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Crítica',
                'description' => 'Problemas urgentes que impedem o funcionamento de áreas importantes.',
                'level' => 4,
                'is_active' => true,
            ],
        ])->each(function (array $priority): void {
            Priority::updateOrCreate(
                ['name' => $priority['name']],
                $priority
            );
        });
    }
}