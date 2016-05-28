<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Comments table seeder
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'naam'=>'Vietnamese Natuursteen',
            'cat_linknaam'=>'vietnamees',
            'coverfoto'=>'images/cover/vietnamees.jpg',

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
        DB::table('categories')->insert([
            'naam'=>'Chinese Natuursteen',
            'cat_linknaam'=>'chinees',
            'coverfoto'=>'images/cover/chinees.jpg',

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'naam'=>'Indische Natuursteen',
            'cat_linknaam'=>'indisch',
            'coverfoto'=>'images/cover/indisch.jpg',

        ]);

    }
}
