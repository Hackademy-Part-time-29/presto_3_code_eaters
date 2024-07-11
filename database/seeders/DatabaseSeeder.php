<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        User::factory()->create([
            'email' => 'qwerty@mail.it',
            'password' => '1234abcd',
            'is_admin' => true,
            'is_revisor' => false,
        ]);

        $this->call([
            MacroCategoriesSeeder::class,
            CategoriesSeeder::class,
            CharacteristicsSeeder::class,
        ]);

        Article::factory(400)->create();
    }
}
