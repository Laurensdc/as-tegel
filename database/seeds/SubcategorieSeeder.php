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
            'coverfoto'=>'producten_vietnamees_getrommeld',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'subcat_linknaam'=>'geschuurd_gezaagd',
            'coverfoto'=>'producten_vietnamees_geschuurd_gezaagd',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

    }
}
