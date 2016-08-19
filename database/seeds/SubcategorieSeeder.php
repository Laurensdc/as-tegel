<?php

use Illuminate\Database\Seeder;

class SubcategorieSeeder extends Seeder
{
    /**
     * Comments table seeder
     *
     * @return void
     */
    public function run()
    {
        /* Vietnamees */
        // 1
        DB::table('subcategories')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'subcat_linknaam'=>'geschuurdgezaagd',
            'beschrijving'=>'Geschuurd gezaagd staat nooit mis en is een klassieker.',
            'categorie_id'=>1,
        ]);

        // 2
        DB::table('subcategories')->insert([
            'naam'=>'Getrommeld',
            'subcat_linknaam'=>'getrommeld',
            'beschrijving'=>'Een prachtige blauwsteen waar u jarenlang plezier aan zult beleven.',
            'categorie_id'=>1,
        ]);

        // 3
        DB::table('subcategories')->insert([
            'naam'=>'Gezandstraald',
            'subcat_linknaam'=>'gezandstraald',
            'beschrijving'=>'Een gezandstraalde steen geeft u een unieke textuur op uw tegel.',
            'categorie_id'=>1,
        ]);

        // 4
        DB::table('subcategories')->insert([
            'naam'=>'Gothiek',
            'subcat_linknaam'=>'gothiek',
            'beschrijving'=>'Voor een stijlvolle gladde tegel kiest u best gothiek.',
            'categorie_id'=>1,
        ]);

        // 5
        DB::table('subcategories')->insert([
            'naam'=>'Gebouchardeerd',
            'subcat_linknaam'=>'gebouchardeerd',
            'beschrijving'=>'Een ruwere tegel voor durvers.',
            'categorie_id'=>1,
        ]);

        /* Chinees */
        // 6
         DB::table('subcategories')->insert([
            'naam'=>'Honed',
            'subcat_linknaam'=>'honed',
            'beschrijving'=>'Deze tegel is recht gezaagd met afwerking verzoet.',
            'categorie_id'=>2,
        ]);      

        // 7
         DB::table('subcategories')->insert([
            'naam'=>'Gevlamd en Geborsteld',
            'subcat_linknaam'=>'gevlamdgeborsteld',
            'beschrijving'=>'Met een dubbele afwerking, enerzijds gevlamd, anderzijds geborsteld, is dit een unieke steen voor een leven lang genot.',
            'categorie_id'=>2,
        ]); 

        // 8
         DB::table('subcategories')->insert([
            'naam'=>'Twila Basalt',
            'subcat_linknaam'=>'twila',
            'beschrijving'=>'De unieke Twila is een basalte tegel.',
            'categorie_id'=>2,
        ]);  

        // 9
         DB::table('subcategories')->insert([
            'naam'=>'G654 Flamed',
            'subcat_linknaam'=>'gflamed',
            'beschrijving'=>'Gevlamde tegel van het type Palladio Light.',
            'categorie_id'=>2,
        ]); 

        ////// Carius Viet
        // 10
         DB::table('subcategories')->insert([
            'naam'=>'Carius Vietnamees',
            'subcat_linknaam'=>'cariusviet',
            'beschrijving'=>'De Carius heeft een uniek formaat dat u nergens anders zult vinden. Zachte afwerking.',
            'categorie_id'=>1,
        ]);           

        ////// Carius Chin
        // 11
        DB::table('subcategories')->insert([
            'naam'=>'Carius Chinees',
            'subcat_linknaam'=>'cariuschin',
            'beschrijving'=>'De Carius heeft een uniek formaat dat u nergens anders zult vinden. Zachte afwerking.',
            'categorie_id'=>2,
        ]);


        ////// Indisch
        // 12
        DB::table('subcategories')->insert([
            'naam'=>'Chandra',
            'subcat_linknaam'=>'chandra',
            'beschrijving'=>'Ontdek ons ruim assortiment aan verschillende Chandra tegels.',
            'categorie_id'=>3,
        ]);        

        //13
        DB::table('subcategories')->insert([
            'naam'=>'Aruna',
            'subcat_linknaam'=>'aruna',
            'beschrijving'=>'',
            'categorie_id'=>3,
        ]);        

        // 14
        DB::table('subcategories')->insert([
            'naam'=>'Jalasa',
            'subcat_linknaam'=>'jalasa',
            'beschrijving'=>'',
            'categorie_id'=>3,
        ]);        

        // 15
        DB::table('subcategories')->insert([
            'naam'=>'Daya',
            'subcat_linknaam'=>'daya',
            'beschrijving'=>'Exclusieve tegel! Aarzel niet.',
            'categorie_id'=>3,
        ]);        

        // 16
        DB::table('subcategories')->insert([
            'naam'=>'Darshana',
            'subcat_linknaam'=>'darshana',
            'beschrijving'=>'Deze tegel heeft rechte kanten en een gezandstraald oppervlak.',
            'categorie_id'=>3,
        ]);        

        // 17
        DB::table('subcategories')->insert([
            'naam'=>'Tandur',
            'subcat_linknaam'=>'tandur',
            'beschrijving'=>'',
            'categorie_id'=>3,
        ]);        

        // 18
        DB::table('subcategories')->insert([
            'naam'=>'Candela',
            'subcat_linknaam'=>'candela',
            'beschrijving'=>'Een klassieker in het gamma. Candela blijft een veilige keuze als u rekent op schoonheid.',
            'categorie_id'=>3,
        ]);        

        // 19
        DB::table('subcategories')->insert([
            'naam'=>'Isola',
            'subcat_linknaam'=>'isola',
            'beschrijving'=>'',
            'categorie_id'=>3,
        ]);        

        ////// Carius Indisch
        // 20
        DB::table('subcategories')->insert([
            'naam'=>'Carius Indisch',
            'subcat_linknaam'=>'cariusind',
            'beschrijving'=>'De Carius heeft een uniek formaat dat u nergens anders zult vinden. Zachte afwerking.',
            'categorie_id'=>3,
        ]);

        //21
         DB::table('subcategories')->insert([
            'naam'=>'Machines',
            'subcat_linknaam'=>'machines',
            'beschrijving'=>'U kan onze machines huren. Contacteer ons voor meer info',
            'categorie_id'=>4,
        ]);       

    }
}
