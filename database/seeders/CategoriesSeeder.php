<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $Categories = [
            ['name' => 'Smartphone e Accessori','macroCategory_id' => '1'],
            ['name' => 'Computer e Laptop','macroCategory_id' => '1'],
            ['name' => 'Televisori e Home Theater','macroCategory_id' => '1'],
            ['name' => 'Fotocamere e Videocamere','macroCategory_id' => '1'],
            ['name' => 'Elettrodomestici','macroCategory_id' => '1'],
            ['name' => 'Abbigliamento Uomo','macroCategory_id' => '2'],
            ['name' => 'Abbigliamento Donna','macroCategory_id' => '2'],
            ['name' => 'Abbigliamento Bambini','macroCategory_id' => '2'],
            ['name' => 'Scarpe','macroCategory_id' => '2'],
            ['name' => 'Accessori Moda (borse, gioielli, orologi)','macroCategory_id' => '2'],
            ['name' => 'Arredamento','macroCategory_id' => '3'],
            ['name' => 'Decorazioni','macroCategory_id' => '3'],
            ['name' => 'Elettrodomestici per la Casa','macroCategory_id' => '3'],
            ['name' => 'Giardinaggio','macroCategory_id' => '3'],
            ['name' => 'Articoli per la Cucina','macroCategory_id' => '3'],
            ['name' => 'Prodotti per la Cura della Pelle','macroCategory_id' => '4'],
            ['name' => 'Trucco e Cosmetici','macroCategory_id' => '4'],
            ['name' => 'Profumi','macroCategory_id' => '4'],
            ['name' => 'Integratori e Vitamine','macroCategory_id' => '4'],
            ['name' => 'Strumenti e Accessori per la Cura Personale','macroCategory_id' => '4'],
            ['name' => 'Abbigliamento Sportivo','macroCategory_id' => '5'],
            ['name' => 'Attrezzature per il Fitness','macroCategory_id' => '5'],
            ['name' => 'Accessori per Sport Specifici','macroCategory_id' => '5'],
            ['name' => 'Articoli per il Campeggio e Outdoor','macroCategory_id' => '5'],
            ['name' => 'Giochi e Giocattoli','macroCategory_id' => '5'],
            ['name' => 'Cibi Freschi','macroCategory_id' => '6'],
            ['name' => 'Alimenti Conservati','macroCategory_id' => '6'],
            ['name' => 'Bevande Alcoliche','macroCategory_id' => '6'],
            ['name' => 'Bevande Analcoliche','macroCategory_id' => '6'],
            ['name' => 'Prodotti Biologici e Vegan','macroCategory_id' => '6'],
            ['name' => 'Libri','macroCategory_id' => '7'],
            ['name' => 'Film e Serie TV','macroCategory_id' => '7'],
            ['name' => 'Musica e CD','macroCategory_id' => '7'],
            ['name' => 'eBook e Audiolibri','macroCategory_id' => '7'],
            ['name' => 'Strumenti Musicali','macroCategory_id' => '7'],
            ['name' => 'Accessori per Auto','macroCategory_id' => '8'],
            ['name' => 'Accessori per Moto','macroCategory_id' => '8'],
            ['name' => 'Ricambi','macroCategory_id' => '8'],
            ['name' => 'Elettronica per Veicoli','macroCategory_id' => '8'],
            ['name' => 'Prodotti per la Manutenzione','macroCategory_id' => '8'],
            ['name' => 'Gioielli Uomo','macroCategory_id' => '9'],
            ['name' => 'Gioielli Donna','macroCategory_id' => '9'],
            ['name' => 'Orologi Uomo','macroCategory_id' => '9'],
            ['name' => 'Orologi Donna','macroCategory_id' => '9'],
            ['name' => 'Gioielli per Occasioni Speciali','macroCategory_id' => '9'],
            ['name' => 'Giocattoli Educativi','macroCategory_id' => '10'],
            ['name' => 'Peluche','macroCategory_id' => '10'],
            ['name' => 'Articoli per la Prima Infanzia','macroCategory_id' => '10'],
            ['name' => 'Passeggini e Seggiolini Auto','macroCategory_id' => '10'],
            ['name' => 'Prodotti per la Cura del Bambino','macroCategory_id' => '10'],
            ['name' => 'Forniture per Ufficio','macroCategory_id' => '11'],
            ['name' => 'Mobili per Ufficio','macroCategory_id' => '11'],
            ['name' => 'Elettronica da Ufficio','macroCategory_id' => '11'],
            ['name' => 'Carta e Cancelleria','macroCategory_id' => '11'],
            ['name' => 'Accessori per la Scrivania','macroCategory_id' => '11'],
            ['name' => 'Valigie e Borse da Viaggio','macroCategory_id' => '12'],
            ['name' => 'Zaini','macroCategory_id' => '12'],
            ['name' => 'Accessori per il Viaggio','macroCategory_id' => '12'],
            ['name' => 'Guide di Viaggio','macroCategory_id' => '12'],
            ['name' => 'Prodotti per il Campeggio','macroCategory_id' => '12'],
        ];

        foreach($Categories as $Category){
            Category::create([
                'name' => $Category['name'],
                'macroCategory_id' => $Category['macroCategory_id'],
            ]);
        }
    }
}
