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
            'coverfoto'=>'images/cover/vietnamees_getrommeld.jpg',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'subcat_linknaam'=>'geschuurdgezaagd',
            'coverfoto'=>'images/cover/vietnamees.jpg',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Candela',
            'subcat_linknaam'=>'candela',
            'coverfoto'=>'images/cover/candela.jpg',

            'categorie_id'=>3,

        ]);
        DB::table('subcategories')->insert([
            'naam'=>'Chandra',
            'subcat_linknaam'=>'chandra',
            'coverfoto'=>'images/cover/chandra.jpg',

            'categorie_id'=>3,

        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Carius',
            'subcat_linknaam'=>'carius',
            'coverfoto'=>'images/cover/carius.jpg',

            'categorie_id'=>4,

        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Keramiek',
            'subcat_linknaam'=>'keramiek',
            'coverfoto'=>'images/cover/keramiek.jpg',

            'categorie_id'=>5,

        ]);


        DB::table('subcategories')->insert([
            'naam'=>'Vloer',
            'subcat_linknaam'=>'vloer',
        
            'categorie_id'=>2,

        ]);

        


    }
}
