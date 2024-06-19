<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void{
        
        // User::factory(10)->create();

        User::factory()->create([
            'email' => 'qwerty@mail.it',
            'password' => '1234abcd',
        ]);

        $this->call([
            MacroCategoriesSeeder::class,
            CategoriesSeeder::class,
        ]);

        Article::factory(400)->create();
    }
}
