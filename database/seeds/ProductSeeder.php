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
            'afmeting'=>'20 x 20 x 2',
            'prijs_particulier'=>'22.32',
            'prijs_handelaar'=>'15.32',
            'coverfoto'=>'images/vietnamees/getrommeld_2020.jpg',
            'cat_id'=>1,
            'subcat_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

    }
}
