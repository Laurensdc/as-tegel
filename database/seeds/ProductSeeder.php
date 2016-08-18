<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Comments table seeder
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'naam'=>'Vietnamees Getrommeld',
            'afmetingen'=>'20 x 20 x 2',
            'prijs_particulier'=>'22.32',
            'prijs_handelaar'=>'15.32',
            'coverfoto'=>'images/producten/vietnamees/getrommeld.jpg',
            'fullresfoto'=>'images/producten/vietnamees/getrommeld.jpg',
            'subcategorie_id'=>1,
            'groepering'=>2,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'naam'=>'Vietnamees Geschuurd Gezaagd',
            'afmetingen'=>'20 x 30 x 2',
            'prijs_particulier'=>'22.32',
            'prijs_handelaar'=>'15.32',
            'coverfoto'=>'images/producten/vietnamees/geschuurd_gezaagd.jpg',
            'fullresfoto'=>'images/producten/vietnamees/geschuurd_gezaagd.jpg',
            
            'subcategorie_id'=>2,
        ]);

        DB::table('products')->insert([
            'naam'=>'Candela Grey',
            'afmetingen'=>'20 x 30 x 2',
            'prijs_particulier'=>'22.32',
            'prijs_handelaar'=>'15.32',
            'coverfoto'=>'images/producten/indisch/candela_grey.jpg',
            'fullresfoto'=>'images/producten/indisch/candela_grey.jpg',
            'subcategorie_id'=>3,
        ]);
        DB::table('products')->insert([
            'naam'=>'Candela Multicolor Tegels',
            'afmetingen'=>'20 x 30 x 2',
            'prijs_particulier'=>'24.32',
            'prijs_handelaar'=>'16.32',
            'coverfoto'=>'images/producten/indisch/candela_multicolor_tegels.jpg',
            'fullresfoto'=>'images/producten/indisch/candela_multicolor_tegels.jpg',
            'subcategorie_id'=>3,
        ]);
        DB::table('products')->insert([
            'naam'=>'Vietnamees Getrommeld',
            'afmetingen'=>'30 x 30 x 2',
            'prijs_particulier'=>'22.32',
            'prijs_handelaar'=>'15.32',
            'coverfoto'=>'images/producten/vietnamees/getrommeld.jpg',
            'fullresfoto'=>'images/producten/vietnamees/getrommeld.jpg',
            'subcategorie_id'=>1,
            'invoorraad'=>false,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'naam'=>'Vietnamees Getrommeld',
            'afmetingen'=>'60 x 60 x 3',
            'prijs_particulier'=>'35.00',
            'prijs_handelaar'=>'25.00',
            'coverfoto'=>'images/producten/vietnamees/getrommeld_2.jpg',
            'fullresfoto'=>'images/producten/vietnamees/getrommeld_2.jpg',
            'subcategorie_id'=>1,
            'groepering'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'naam'=>'Vietnamees Getrommeld',
            'afmetingen'=>'40 x 40 x 2',
            'prijs_particulier'=>'22.32',
            'prijs_handelaar'=>'24.32',
            'subcategorie_id'=>1,
            'groepering'=>1,
        ]);

        DB::table('products')->insert([
            'naam'=>'Vietnamees Getrommeld',
            'afmetingen'=>'100 x 100 x 3',
            'prijs_particulier'=>'35.00',
            'prijs_handelaar'=>'25.00',
            'coverfoto'=>'images/producten/vietnamees/getrommeld.jpg',
            'fullresfoto'=>'images/producten/vietnamees/getrommeld.jpg',
            'subcategorie_id'=>1,
            'groepering'=>1,
            'invoorraad'=>false,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius',
            'afmetingen'=>'33 x 11 x 3',
            'prijs_particulier'=>'30.00',
            'prijs_handelaar'=>'20.00',
            'coverfoto'=>'images/producten/carius/carius.jpg',
            'fullresfoto'=>'images/producten/carius/carius.jpg',
            'subcategorie_id'=>5,
        ]);
      
        DB::table('products')->insert([
            'naam'=>'Carius',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_particulier'=>'30.00',
            'prijs_handelaar'=>'20.00',
            'coverfoto'=>'images/producten/carius/carius_4dik.jpg',
            'fullresfoto'=>'images/producten/carius/carius_4dik.jpg',
            'beschrijving'=>'De Carius is een unieke steen. Te verkrijgen in twee verschillende formaten met elk hun unieke afwerking zal deze steen uw tuin gegarandeerd vervolmaken!',
            'subcategorie_id'=>5,
        ]);     

        DB::table('products')->insert([
            'naam'=>'Osteria Antracite',
            'afmetingen'=>'60 x 60 x 2',
            'prijs_particulier'=>'40.00',
            'prijs_handelaar'=>'30.00',
            'coverfoto'=>'images/producten/keramiek/osteria.jpg',
            'fullresfoto'=>'images/producten/keramiek/osteria.jpg',
            'subcategorie_id'=>6,
        ]);

        DB::table('products')->insert([
            'naam'=>'Gevlamd en Geborsteld',
            'afmetingen'=>'40 x 40 x 2',
            'prijs_particulier'=>'25.00',
            'prijs_handelaar'=>'23.00',
            'coverfoto'=>'images/producten/chinees/gevlamd_geborsteld.jpg',
            'fullresfoto'=>'images/producten/chinees/gevlamd_geborsteld.jpg',
            'subcategorie_id'=>7,
        ]);

        DB::table('products')->insert([
            'naam'=>'Candela Grey',
            'afmetingen'=>'20 x 5 x 5',
            'prijs_particulier'=>'25.32',
            'prijs_handelaar'=>'17.48',
            'coverfoto'=>'images/producten/indisch/candela_grey_20x5x5.jpg',
            'fullresfoto'=>'images/producten/indisch/candela_grey_20x5x5.jpg',
            'invoorraad'=>false,
            'subcategorie_id'=>3,
        ]);

        DB::table('products')->insert([
            'naam'=>'Candela Black',
            'afmetingen'=>'20 x 20 x 2',
            'prijs_particulier'=>'20',
            'prijs_handelaar'=>'12',
            'coverfoto'=>'images/producten/indisch/candela_black.jpg',
            'fullresfoto'=>'images/producten/indisch/candela_black.jpg',
            'subcategorie_id'=>3,
        ]);
    }
}
