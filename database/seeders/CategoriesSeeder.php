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
    public function run(): void
    {
        $Categories = [
            ['name' => 'Smartphone e Accessori', 'macroCategory_id' => '1','en'=>'','ro'=>''],
            ['name' => 'Computer e Laptop', 'macroCategory_id' => '1','en'=>'','ro'=>''],
            ['name' => 'Televisori e Home Theater', 'macroCategory_id' => '1','en'=>'','ro'=>''],
            ['name' => 'Fotocamere e Videocamere', 'macroCategory_id' => '1','en'=>'','ro'=>''],
            ['name' => 'Elettrodomestici', 'macroCategory_id' => '1','en'=>'','ro'=>''],
            ['name' => 'Abbigliamento Uomo', 'macroCategory_id' => '2','en'=>'','ro'=>''],
            ['name' => 'Abbigliamento Donna', 'macroCategory_id' => '2','en'=>'','ro'=>''],
            ['name' => 'Abbigliamento Bambini', 'macroCategory_id' => '2','en'=>'','ro'=>''],
            ['name' => 'Scarpe', 'macroCategory_id' => '2','en'=>'','ro'=>''],
            ['name' => 'Accessori Moda (borse, gioielli, orologi)', 'macroCategory_id' => '2','en'=>'','ro'=>''],
            ['name' => 'Arredamento', 'macroCategory_id' => '3','en'=>'','ro'=>''],
            ['name' => 'Decorazioni', 'macroCategory_id' => '3','en'=>'','ro'=>''],
            ['name' => 'Elettrodomestici per la Casa', 'macroCategory_id' => '3','en'=>'','ro'=>''],
            ['name' => 'Giardinaggio', 'macroCategory_id' => '3','en'=>'','ro'=>''],
            ['name' => 'Articoli per la Cucina', 'macroCategory_id' => '3','en'=>'','ro'=>''],
            ['name' => 'Prodotti per la Cura della Pelle', 'macroCategory_id' => '4','en'=>'','ro'=>''],
            ['name' => 'Trucco e Cosmetici', 'macroCategory_id' => '4','en'=>'','ro'=>''],
            ['name' => 'Profumi', 'macroCategory_id' => '4','en'=>'','ro'=>''],
            ['name' => 'Integratori e Vitamine', 'macroCategory_id' => '4','en'=>'','ro'=>''],
            ['name' => 'Strumenti e Accessori per la Cura Personale', 'macroCategory_id' => '4','en'=>'','ro'=>''],
            ['name' => 'Abbigliamento Sportivo', 'macroCategory_id' => '5','en'=>'','ro'=>''],
            ['name' => 'Attrezzature per il Fitness', 'macroCategory_id' => '5','en'=>'','ro'=>''],
            ['name' => 'Accessori per Sport Specifici', 'macroCategory_id' => '5','en'=>'','ro'=>''],
            ['name' => 'Articoli per il Campeggio e Outdoor', 'macroCategory_id' => '5','en'=>'','ro'=>''],
            ['name' => 'Giochi e Giocattoli', 'macroCategory_id' => '5','en'=>'','ro'=>''],
            ['name' => 'Cibi Freschi', 'macroCategory_id' => '6','en'=>'','ro'=>''],
            ['name' => 'Alimenti Conservati', 'macroCategory_id' => '6','en'=>'','ro'=>''],
            ['name' => 'Bevande Alcoliche', 'macroCategory_id' => '6','en'=>'','ro'=>''],
            ['name' => 'Bevande Analcoliche', 'macroCategory_id' => '6','en'=>'','ro'=>''],
            ['name' => 'Prodotti Biologici e Vegan', 'macroCategory_id' => '6','en'=>'','ro'=>''],
            ['name' => 'Libri', 'macroCategory_id' => '7','en'=>'','ro'=>''],
            ['name' => 'Film e Serie TV', 'macroCategory_id' => '7','en'=>'','ro'=>''],
            ['name' => 'Musica e CD', 'macroCategory_id' => '7','en'=>'','ro'=>''],
            ['name' => 'eBook e Audiolibri', 'macroCategory_id' => '7','en'=>'','ro'=>''],
            ['name' => 'Strumenti Musicali', 'macroCategory_id' => '7','en'=>'','ro'=>''],
            ['name' => 'Accessori per Auto', 'macroCategory_id' => '8','en'=>'','ro'=>''],
            ['name' => 'Accessori per Moto', 'macroCategory_id' => '8','en'=>'','ro'=>''],
            ['name' => 'Ricambi', 'macroCategory_id' => '8','en'=>'','ro'=>''],
            ['name' => 'Elettronica per Veicoli', 'macroCategory_id' => '8','en'=>'','ro'=>''],
            ['name' => 'Prodotti per la Manutenzione', 'macroCategory_id' => '8','en'=>'','ro'=>''],
            ['name' => 'Gioielli Uomo', 'macroCategory_id' => '9','en'=>'','ro'=>''],
            ['name' => 'Gioielli Donna', 'macroCategory_id' => '9','en'=>'','ro'=>''],
            ['name' => 'Orologi Uomo', 'macroCategory_id' => '9','en'=>'','ro'=>''],
            ['name' => 'Orologi Donna', 'macroCategory_id' => '9','en'=>'','ro'=>''],
            ['name' => 'Gioielli per Occasioni Speciali', 'macroCategory_id' => '9','en'=>'','ro'=>''],
            ['name' => 'Giocattoli Educativi', 'macroCategory_id' => '10','en'=>'','ro'=>''],
            ['name' => 'Peluche', 'macroCategory_id' => '10','en'=>'','ro'=>''],
            ['name' => 'Articoli per la Prima Infanzia', 'macroCategory_id' => '10','en'=>'','ro'=>''],
            ['name' => 'Passeggini e Seggiolini Auto', 'macroCategory_id' => '10','en'=>'','ro'=>''],
            ['name' => 'Prodotti per la Cura del Bambino', 'macroCategory_id' => '10','en'=>'','ro'=>''],
            ['name' => 'Forniture per Ufficio', 'macroCategory_id' => '11','en'=>'','ro'=>''],
            ['name' => 'Mobili per Ufficio', 'macroCategory_id' => '11','en'=>'','ro'=>''],
            ['name' => 'Elettronica da Ufficio', 'macroCategory_id' => '11','en'=>'','ro'=>''],
            ['name' => 'Carta e Cancelleria', 'macroCategory_id' => '11','en'=>'','ro'=>''],
            ['name' => 'Accessori per la Scrivania', 'macroCategory_id' => '11','en'=>'','ro'=>''],
            ['name' => 'Valigie e Borse da Viaggio', 'macroCategory_id' => '12','en'=>'','ro'=>''],
            ['name' => 'Zaini', 'macroCategory_id' => '12','en'=>'','ro'=>''],
            ['name' => 'Accessori per il Viaggio', 'macroCategory_id' => '12','en'=>'','ro'=>''],
            ['name' => 'Guide di Viaggio', 'macroCategory_id' => '12','en'=>'','ro'=>''],
            ['name' => 'Prodotti per il Campeggio', 'macroCategory_id' => '12','en'=>'','ro'=>''],
        ];

        foreach ($Categories as $Category) {
            Category::create([
                'name' => $Category['name'],
                'macroCategory_id' => $Category['macroCategory_id'],
            ]);
        }
    }
}
