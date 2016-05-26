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
            'naam'=>'Natuursteen Vietnamees',
            'cat_linknaam'=>'vietnamees',
            'coverfoto'=>'producten_vietnamees',

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('categories')->insert([
            'naam'=>'Natuursteen Chinees',
            'cat_linknaam'=>'chinees',
            'coverfoto'=>'producten_chinees',

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);


    }
}
