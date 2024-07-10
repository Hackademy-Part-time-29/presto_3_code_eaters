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
        $Categories
            = [
                ['name' => 'Smartphone e Accessori', 'macroCategory_id' => '1', 'en' => 'Smartphones and Accessories', 'ro' => 'Smartphone-uri și Accesorii'],
                ['name' => 'Computer e Laptop', 'macroCategory_id' => '1', 'en' => 'Computers and Laptops', 'ro' => 'Calculatoare și Laptopuri'],
                ['name' => 'Televisori e Home Theater', 'macroCategory_id' => '1', 'en' => 'Televisions and Home Theater', 'ro' => 'Televizoare și Home Theater'],
                ['name' => 'Fotocamere e Videocamere', 'macroCategory_id' => '1', 'en' => 'Cameras and Camcorders', 'ro' => 'Aparate Foto și Camere Video'],
                ['name' => 'Elettrodomestici', 'macroCategory_id' => '1', 'en' => 'Home Appliances', 'ro' => 'Electrocasnice'],
                ['name' => 'Abbigliamento Uomo', 'macroCategory_id' => '2', 'en' => 'Men\'s Clothing', 'ro' => 'Îmbrăcăminte pentru Bărbați'],
                ['name' => 'Abbigliamento Donna', 'macroCategory_id' => '2', 'en' => 'Women\'s Clothing', 'ro' => 'Îmbrăcăminte pentru Femei'],
                ['name' => 'Abbigliamento Bambini', 'macroCategory_id' => '2', 'en' => 'Children\'s Clothing', 'ro' => 'Îmbrăcăminte pentru Copii'],
                ['name' => 'Scarpe', 'macroCategory_id' => '2', 'en' => 'Shoes', 'ro' => 'Încălțăminte'],
                ['name' => 'Accessori Moda (borse, gioielli, orologi)', 'macroCategory_id' => '2', 'en' => 'Fashion Accessories (bags, jewelry, watches)', 'ro' => 'Accesorii Modă (genți, bijuterii, ceasuri)'],
                ['name' => 'Arredamento', 'macroCategory_id' => '3', 'en' => 'Furniture', 'ro' => 'Mobilă'],
                ['name' => 'Decorazioni', 'macroCategory_id' => '3', 'en' => 'Decorations', 'ro' => 'Decorațiuni'],
                ['name' => 'Elettrodomestici per la Casa', 'macroCategory_id' => '3', 'en' => 'Home Appliances', 'ro' => 'Electrocasnice pentru Casă'],
                ['name' => 'Giardinaggio', 'macroCategory_id' => '3', 'en' => 'Gardening', 'ro' => 'Grădinărit'],
                ['name' => 'Articoli per la Cucina', 'macroCategory_id' => '3', 'en' => 'Kitchenware', 'ro' => 'Ustensile de Bucătărie'],
                ['name' => 'Prodotti per la Cura della Pelle', 'macroCategory_id' => '4', 'en' => 'Skin Care Products', 'ro' => 'Produse pentru Îngrijirea Pielii'],
                ['name' => 'Trucco e Cosmetici', 'macroCategory_id' => '4', 'en' => 'Makeup and Cosmetics', 'ro' => 'Machiaj și Cosmetice'],
                ['name' => 'Profumi', 'macroCategory_id' => '4', 'en' => 'Perfumes', 'ro' => 'Parfumuri'],
                ['name' => 'Integratori e Vitamine', 'macroCategory_id' => '4', 'en' => 'Supplements and Vitamins', 'ro' => 'Suplimente și Vitamine'],
                ['name' => 'Strumenti e Accessori per la Cura Personale', 'macroCategory_id' => '4', 'en' => 'Personal Care Tools and Accessories', 'ro' => 'Unelte și Accesorii pentru Îngrijire Personală'],
                ['name' => 'Abbigliamento Sportivo', 'macroCategory_id' => '5', 'en' => 'Sportswear', 'ro' => 'Îmbrăcăminte Sport'],
                ['name' => 'Attrezzature per il Fitness', 'macroCategory_id' => '5', 'en' => 'Fitness Equipment', 'ro' => 'Echipamente Fitness'],
                ['name' => 'Accessori per Sport Specifici', 'macroCategory_id' => '5', 'en' => 'Specific Sports Accessories', 'ro' => 'Accesorii pentru Sporturi Specifice'],
                ['name' => 'Articoli per il Campeggio e Outdoor', 'macroCategory_id' => '5', 'en' => 'Camping and Outdoor Gear', 'ro' => 'Articole pentru Camping și Activități Outdoor'],
                ['name' => 'Giochi e Giocattoli', 'macroCategory_id' => '5', 'en' => 'Toys and Games', 'ro' => 'Jocuri și Jucării'],
                ['name' => 'Cibi Freschi', 'macroCategory_id' => '6', 'en' => 'Fresh Foods', 'ro' => 'Alimente Proaspete'],
                ['name' => 'Alimenti Conservati', 'macroCategory_id' => '6', 'en' => 'Canned Foods', 'ro' => 'Alimente Conservate'],
                ['name' => 'Bevande Alcoliche', 'macroCategory_id' => '6', 'en' => 'Alcoholic Beverages', 'ro' => 'Băuturi Alcoolice'],
                ['name' => 'Bevande Analcoliche', 'macroCategory_id' => '6', 'en' => 'Non-alcoholic Beverages', 'ro' => 'Băuturi Nealcoolice'],
                ['name' => 'Prodotti Biologici e Vegan', 'macroCategory_id' => '6', 'en' => 'Organic and Vegan Products', 'ro' => 'Produse Biologice și Vegan'],
                ['name' => 'Libri', 'macroCategory_id' => '7', 'en' => 'Books', 'ro' => 'Cărți'],
                ['name' => 'Film e Serie TV', 'macroCategory_id' => '7', 'en' => 'Movies and TV Series', 'ro' => 'Filme și Seriale TV'],
                ['name' => 'Musica e CD', 'macroCategory_id' => '7', 'en' => 'Music and CDs', 'ro' => 'Muzică și CD-uri'],
                ['name' => 'eBook e Audiolibri', 'macroCategory_id' => '7', 'en' => 'eBooks and Audiobooks', 'ro' => 'eBook-uri și Audiobook-uri'],
                ['name' => 'Strumenti Musicali', 'macroCategory_id' => '7', 'en' => 'Musical Instruments', 'ro' => 'Instrumente Muzicale'],
                ['name' => 'Accessori per Auto', 'macroCategory_id' => '8', 'en' => 'Car Accessories', 'ro' => 'Accesorii Auto'],
                ['name' => 'Accessori per Moto', 'macroCategory_id' => '8', 'en' => 'Motorcycle Accessories', 'ro' => 'Accesorii Moto'],
                ['name' => 'Ricambi', 'macroCategory_id' => '8', 'en' => 'Spare Parts', 'ro' => 'Piese de Schimb'],
                ['name' => 'Elettronica per Veicoli', 'macroCategory_id' => '8', 'en' => 'Vehicle Electronics', 'ro' => 'Electronică pentru Vehicule'],
                ['name' => 'Prodotti per la Manutenzione', 'macroCategory_id' => '8', 'en' => 'Maintenance Products', 'ro' => 'Produse de Întreținere'],
                ['name' => 'Gioielli Uomo', 'macroCategory_id' => '9', 'en' => 'Men\'s Jewelry', 'ro' => 'Gărgărițe pentru Bărbați'],
                ['name' => 'Gioielli Donna', 'macroCategory_id' => '9', 'en' => 'Women\'s Jewelry', 'ro' => 'Gărgărițe pentru Femei'],
                ['name' => 'Orologi Uomo', 'macroCategory_id' => '9', 'en' => 'Men\'s Watches', 'ro' => 'Ceasuri pentru Bărbați'],
                ['name' => 'Orologi Donna', 'macroCategory_id' => '9', 'en' => 'Women\'s Watches', 'ro' => 'Ceasuri pentru Femei'],
                ['name' => 'Gioielli per Occasioni Speciali', 'macroCategory_id' => '9', 'en' => 'Special Occasion Jewelry', 'ro' => 'Gărgărițe pentru Ocazii Speciale'],
                ['name' => 'Giocattoli Educativi', 'macroCategory_id' => '10', 'en' => 'Educational Toys', 'ro' => 'Jucării Educative'],
                ['name' => 'Peluche', 'macroCategory_id' => '10', 'en' => 'Stuffed Toys', 'ro' => 'Jucării de Pluș'],
                ['name' => 'Articoli per la Prima Infanzia', 'macroCategory_id' => '10', 'en' => 'Infant Items', 'ro' => 'Articole pentru Bebeluși'],
                ['name' => 'Passeggini e Seggiolini Auto', 'macroCategory_id' => '10', 'en' => 'Strollers and Car Seats', 'ro' => 'Cărucioare și Scaune Auto'],
                ['name' => 'Prodotti per la Cura del Bambino', 'macroCategory_id' => '10', 'en' => 'Baby Care Products', 'ro' => 'Produse pentru Îngrijirea Bebelușului'],
                ['name' => 'Forniture per Ufficio', 'macroCategory_id' => '11', 'en' => 'Office Supplies', 'ro' => 'Articole de Birou'],
                ['name' => 'Mobili per Ufficio', 'macroCategory_id' => '11', 'en' => 'Office Furniture', 'ro' => 'Mobilier de Birou'],
                ['name' => 'Elettronica da Ufficio', 'macroCategory_id' => '11', 'en' => 'Office Electronics', 'ro' => 'Electronică de Birou'],
                ['name' => 'Carta e Cancelleria', 'macroCategory_id' => '11', 'en' => 'Paper and Stationery', 'ro' => 'Hârtie și Papetărie'],
                ['name' => 'Accessori per la Scrivania', 'macroCategory_id' => '11', 'en' => 'Desk Accessories', 'ro' => 'Accesorii pentru Birou'],
                ['name' => 'Valigie e Borse da Viaggio', 'macroCategory_id' => '12', 'en' => 'Luggage and Travel Bags', 'ro' => 'Trolere și Genți de Călătorie'],
                ['name' => 'Zaini', 'macroCategory_id' => '12', 'en' => 'Backpacks', 'ro' => 'Rucsaci'],
                ['name' => 'Accessori per il Viaggio', 'macroCategory_id' => '12', 'en' => 'Travel Accessories', 'ro' => 'Accesorii de Călătorie'],
                ['name' => 'Guide di Viaggio', 'macroCategory_id' => '12', 'en' => 'Travel Guides', 'ro' => 'Ghiduri de Călătorie'],
                ['name' => 'Prodotti per il Campeggio', 'macroCategory_id' => '12', 'en' => 'Camping Products', 'ro' => 'Produse pentru Camping'],
            ];

        foreach ($Categories as $Category) {
            Category::create([
                'name' => $Category['name'],
                'macroCategory_id' => $Category['macroCategory_id'],
                'en' =>$Category['en'],
                'ro' =>$Category['ro'],
            ]);
        }
    }
}
