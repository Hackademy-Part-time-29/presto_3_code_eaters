<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MacroCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public $macroCategories = [
        'Elettronica',
        'Moda',
        'Casa e Giardino',
        'Salute e Bellezza',
        'Sport e Tempo libero',
        'Libri, Film e Musica',
        'Auto e Moto',
        'Gioielli e Orologi',
        'Viaggi e Valigeria',
        'Ufficio e Cancelleria'
    ];

    public function run(): void
    {
        foreach($this->macroCategories as $macroCategory){
            MacroCategory::create([
                'name' => $macroCategory
            ]);
        }

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
