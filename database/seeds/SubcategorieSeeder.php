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
        DB::table('subcategories')->insert([
            'naam'=>'Getrommeld',
            'subcat_linknaam'=>'getrommeld',
            'beschrijving'=>'Een prachtige blauwsteen waar u jarenlang plezier aan zult beleven.',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'subcat_linknaam'=>'geschuurdgezaagd',
            'beschrijving'=>'Stelt nooit teleur.',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Candela',
            'subcat_linknaam'=>'candela',

            'categorie_id'=>3,

        ]);
        DB::table('subcategories')->insert([
            'naam'=>'Chandra',
            'subcat_linknaam'=>'chandra',

            'categorie_id'=>3,

        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Carius',
            'subcat_linknaam'=>'carius',

            'categorie_id'=>4,

        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Keramiek',
            'subcat_linknaam'=>'keramiek',

            'categorie_id'=>5,

        ]);


        DB::table('subcategories')->insert([
            'naam'=>'Vloer',
            'subcat_linknaam'=>'vloer',
        
            'categorie_id'=>2,

        ]);

        


    }
}
