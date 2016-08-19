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
        // 1
        DB::table('categories')->insert([
            'naam'=>'Vietnamese Natuursteen',
            'cat_linknaam'=>'vietnamees',
            'coverfoto'=>'images/cover/vietnamees.jpg',
            'fullresfoto'=>'images/cover/vietnamees.jpg',
            'volgorde'=>1,
        ]);
        
        // 2
        DB::table('categories')->insert([
            'naam'=>'Chinese Natuursteen',
            'cat_linknaam'=>'chinees',
            'coverfoto'=>'images/cover/chinees.jpg',
            'fullresfoto'=>'images/cover/chinees.jpg',
            'volgorde'=>2,
        ]);

        // 3
        DB::table('categories')->insert([
            'naam'=>'Indische Natuursteen',
            'cat_linknaam'=>'indisch',
            'coverfoto'=>'images/cover/indisch.jpg',
            'fullresfoto'=>'images/cover/indisch.jpg',
            'volgorde'=>3,

        ]);
        
        // 4
        DB::table('categories')->insert([
            'naam'=>'Verhuur',
            'cat_linknaam'=>'verhuur',
            'coverfoto'=>'images/cover/verhuur.jpg',
            'fullresfoto'=>'images/cover/verhuur.jpg',
        ]);



    }
}
