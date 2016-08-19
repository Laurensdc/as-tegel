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

        /* Vietnamees */
        ////// Geschuurd gezaagd
        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'15 x 15 x 2',
            'prijs_handelaar'=>'13.19',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]);

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'20 x 20 x 2',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]);


        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'20 x 20 x 2.5',
            'prijs_handelaar'=>'20.80',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]);

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'20 x 5 x 5',
            'prijs_handelaar'=>'29.95',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]);        

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'30 x 30 x 2.5',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]); 

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'40 x 40 x 2',
            'prijs_handelaar'=>'25.90',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]); 

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'50 x 50 x 2',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]); 

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'50 x 50 x 2.5',
            'prijs_handelaar'=>'27.24',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]); 

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'60 x 60 x 2.5',
            'prijs_handelaar'=>'32.40',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]); 

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'80 x 80 x 3',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]); 

        DB::table('products')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'afmetingen'=>'100 x 100 x 3',
            'prijs_handelaar'=>'69.27',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>1,
        ]);

        ////// Getrommeld
        DB::table('products')->insert([
            'naam'=>'Getrommeld',
            'afmetingen'=>'10 x 10 x 2',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>2,
        ]);

        DB::table('products')->insert([
            'naam'=>'Getrommeld',
            'afmetingen'=>'10 x 10 x 2.5',
            'prijs_handelaar'=>'13.09',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>2,
        ]); 

        DB::table('products')->insert([
            'naam'=>'Getrommeld',
            'afmetingen'=>'15 x 15 x 2.5 Best Quality',
            'prijs_handelaar'=>'16.28',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>2,
        ]);  

        DB::table('products')->insert([
            'naam'=>'Getrommeld',
            'afmetingen'=>'20 x 5 x 5',
            'prijs_handelaar'=>'30.05',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>2,
        ]);

        DB::table('products')->insert([
            'naam'=>'Getrommeld',
            'afmetingen'=>'20 x 20 x 5',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>2,
        ]);

        DB::table('products')->insert([
            'naam'=>'Getrommeld',
            'afmetingen'=>'20 x 20 x 2.5',
            'prijs_handelaar'=>'15.64',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>2,
        ]);

        DB::table('products')->insert([
            'naam'=>'Getrommeld',
            'afmetingen'=>'30 x 30 x 2.5',
            'prijs_handelaar'=>'17.01',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>2,
        ]);

        DB::table('products')->insert([
            'naam'=>'Getrommeld',
            'afmetingen'=>'40 x 40 x 2.5',
            'prijs_handelaar'=>'22.87',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>2,
        ]);

        ////// Gezandstraald
        DB::table('products')->insert([
            'naam'=>'Getrommeld en Gezandstraald',
            'afmetingen'=>'20 x 20 x 2.5',
            'prijs_handelaar'=>'15.75',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>3,
        ]);

        DB::table('products')->insert([
            'naam'=>'Gezandstraald',
            'afmetingen'=>'50 x 50 x 2.5',
            'prijs_handelaar'=>'24.70',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>3,
        ]);

        DB::table('products')->insert([
            'naam'=>'Gezandstraald',
            'afmetingen'=>'60 x 60 x 2.5',
            'prijs_handelaar'=>'30.58',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>3,
        ]);


        ////// Gothiek
        DB::table('products')->insert([
            'naam'=>'Gothiek',
            'afmetingen'=>'20 x 20 x 2.5',
            'prijs_handelaar'=>'26.57',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>4,
        ]);

        DB::table('products')->insert([
            'naam'=>'Gothiek',
            'afmetingen'=>'40 x 40 x 2.5',
            'prijs_handelaar'=>'30.55',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>4,
        ]);

        DB::table('products')->insert([
            'naam'=>'Gothiek',
            'afmetingen'=>'50 x 50 x 2.5',
            'prijs_handelaar'=>'34.34',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>4,
        ]);

        DB::table('products')->insert([
            'naam'=>'Gothiek',
            'afmetingen'=>'60 x 60 x 2.5',
            'prijs_handelaar'=>'38.56',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>4,
        ]);

        DB::table('products')->insert([
            'naam'=>'Gothiek Romeins Verband',
            'afmetingen'=>'Gecombineerd',
            'prijs_handelaar'=>'36.60',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>4,
        ]);

        DB::table('products')->insert([
            'naam'=>'Gothiek Modern',
            'afmetingen'=>'60 x 60 x 2.5',
            'prijs_handelaar'=>'38.56',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>4,
        ]);

        ////// Gebouchardeerd
        DB::table('products')->insert([
            'naam'=>'Gebouchardeerd',
            'afmetingen'=>'40 x 40 x 3',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>5,
        ]);

        DB::table('products')->insert([
            'naam'=>'Oud Brugge (Gebouchardeerd + afwerking Gothiek)',
            'afmetingen'=>'20 x 20 x 2.5',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>5,
        ]);

        /* Chinees */
        ////// Recht gezaagd + verzoet 
        DB::table('products')->insert([
            'naam'=>'Honed 400',
            'afmetingen'=>'50 x 50 x 2',
            'prijs_handelaar'=>'20.09',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>6,
        ]);

        DB::table('products')->insert([
            'naam'=>'Honed 400',
            'afmetingen'=>'60 x 60 x 2',
            'prijs_handelaar'=>'21.22',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>6,
        ]);

        DB::table('products')->insert([
            'naam'=>'Honed 400',
            'afmetingen'=>'80 x 80 x 3',
            'prijs_handelaar'=>'42.01',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>6,
        ]);

        DB::table('products')->insert([
            'naam'=>'Honed 400',
            'afmetingen'=>'100 x 100 x 3',
            'prijs_handelaar'=>'47.46',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>6,
        ]);

        ////// Gevlamd geborsteld
         DB::table('products')->insert([
            'naam'=>'Blauwsteen Gevlamd en Geborsteld',
            'afmetingen'=>'80 x 80 x 3',
            'prijs_handelaar'=>'39.60',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>7,
        ]);

         DB::table('products')->insert([
            'naam'=>'Blauwsteen Gevlamd en Geborsteld',
            'afmetingen'=>'100 x 100 x 3',
            'prijs_handelaar'=>'43.45',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>7,
        ]);

         DB::table('products')->insert([
            'naam'=>'Chinese Gekloven Steen',
            'afmetingen'=>'30 x 5 x 5',
            'prijs_handelaar'=>'52.00',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>7,
        ]);

        ////// Twila
         DB::table('products')->insert([
            'naam'=>'Twila',
            'afmetingen'=>'20 x 20 x 2.5',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>8,
        ]);

         DB::table('products')->insert([
            'naam'=>'Twila',
            'afmetingen'=>'50 x 50 x 2',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>8,
        ]);

         DB::table('products')->insert([
            'naam'=>'Twila',
            'afmetingen'=>'60 x 60 x 2',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>8,
        ]);

        ////// G654 Flamed
         DB::table('products')->insert([
            'naam'=>'G654 Flamed',
            'afmetingen'=>'10 x 10 x 4',
            'prijs_handelaar'=>'20.32',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>9,
        ]);

         DB::table('products')->insert([
            'naam'=>'G654 Flamed',
            'afmetingen'=>'50 x 50 x 2.5',
            'prijs_handelaar'=>'23.87',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>9,
        ]);

         DB::table('products')->insert([
            'naam'=>'G654 Flamed',
            'afmetingen'=>'60 x 30 x 2',
            'prijs_handelaar'=>'19.58',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>9,
        ]);

         DB::table('products')->insert([
            'naam'=>'G654 Flamed',
            'afmetingen'=>'60 x 60 x 3',
            'prijs_handelaar'=>'22.82',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>9,
        ]);

         DB::table('products')->insert([
            'naam'=>'G654 Flamed',
            'afmetingen'=>'80 x 80 x 3',
            'prijs_handelaar'=>'38.69',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>9,
        ]);

         DB::table('products')->insert([
            'naam'=>'G654 Flamed',
            'afmetingen'=>'100 x 100 x 3',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>9,
        ]);

        ////// Carius
        DB::table('products')->insert([
            'naam'=>'Carius Gothiek',
            'afmetingen'=>'33 x 11 x 3',
            'prijs_handelaar'=>'28.40',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>10,
        ]);      
    
        DB::table('products')->insert([
            'naam'=>'Carius Gothiek',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'34.62',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>10,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius Antiek',
            'afmetingen'=>'33 x 11 x 3',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>10,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius Antiek',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'34.62',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>10,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius Chinees',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>11,
        ]);

        ////// Indisch
        






        DB::table('products')->insert([
            'naam'=>'Carius Naturel',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'34.62',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>20,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius Rustic',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'34.62',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>20,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius Black',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'34.62',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>20,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius Black Tumbled',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'34.62',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>20,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius Jalasa',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'34.62',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>20,
        ]);

        DB::table('products')->insert([
            'naam'=>'Carius Grey',
            'afmetingen'=>'33 x 11 x 4',
            'prijs_handelaar'=>'34.62',
            'coverfoto'=>'images/producten/_geenfoto.jpg',
            'fullresfoto'=>'images/producten/_geenfoto.jpg',
            'subcategorie_id'=>20,
        ]);





    }
}
