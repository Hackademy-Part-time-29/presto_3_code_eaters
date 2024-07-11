<?php

namespace Database\Seeders;

use App\Models\MacroCategory;
use Illuminate\Database\Seeder;

class MacroCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $macroCategories = [
            ['name' => 'Elettronica'],
            ['name' => 'Moda'],
            ['name' => 'Casa e Giardino'],
            ['name' => 'Salute e Bellezza'],
            ['name' => 'Sport e Tempo libero'],
            ['name' => 'Alimentari e Bevande'],
            ['name' => 'Libri, Film e Musica'],
            ['name' => 'Auto e Moto'],
            ['name' => 'Gioielli e Orologi'],
            ['name' => 'Giocattoli e Prima Infanzia'],
            ['name' => 'Ufficio e Cancelleria'],
            ['name' => 'Viaggi e Valigeria'],
        ];

        foreach ($macroCategories as $macroCategory) {
            MacroCategory::create([
                'name' => $macroCategory['name'],
            ]);
        }
    }
}
