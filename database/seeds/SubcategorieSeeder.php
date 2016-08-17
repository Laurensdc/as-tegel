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
            'beschrijving'=>'Stelt nooit teleur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, eaque. Ipsum iure incidunt fugit libero, fugiat, aperiam perferendis soluta aliquam, voluptas, blanditiis officia in odio ullam commodi cumque ipsa sunt.',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Gezandstraald',
            'subcat_linknaam'=>'gezandstraald',
            'beschrijving'=>'Een prachtige ipsam perspiciatis ut debitis explicabo necessitatibus quisquam?',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Gebouchardeerd',
            'subcat_linknaam'=>'gebouchardeerd',
            'beschrijving'=>'Een prachtige ipsam perspiciatis ut debitis explicabo necessitatibus quisquam?',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Basalt',
            'subcat_linknaam'=>'basalt',
            'beschrijving'=>'Deze basalt perspiciatis ut debitis explicabo necessitatibus quisquam?',

            'categorie_id'=>1,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Candela',
            'subcat_linknaam'=>'candela',
            'beschrijving' =>'Met Candela kan u nooit verkeerd doen. Een prachtige tegel voor uw terras die uitmuntend lijkt in de zomer.',

            'categorie_id'=>3,

        ]);
        DB::table('subcategories')->insert([
            'naam'=>'Chandra',
            'subcat_linknaam'=>'chandra',
            'beschrijving' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore necessitatibus quibusdam expedita aut, ratione maiores praesentium laboriosam sapiente blanditiis, sit doloremque laudantium culpa fugiat provident numquam, veniam aliquid error!',

            'categorie_id'=>3,

        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Carius',
            'subcat_linknaam'=>'carius',
            'beschrijving' =>'Consectetur adipisicing elit. Aliquam labore necessitatibus quibusdam expedita aut, ratione maiores praesentium laboriosam sapiente blanditiis, sit doloremque laudantium culpa fugiat provident numquam, veniam aliquid error!',

            'categorie_id'=>4,

        ]);

        DB::table('subcategories')->insert([
            'naam'=>'Keramiek',
            'subcat_linknaam'=>'keramiek',
            'beschrijving' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore necessitatibus quibusdam expedita aut, ratione maiores praesentium laboriosam sapiente blanditiis, sit doloremque laudantium culpa fugiat provident numquam, veniam aliquid error!',
            'categorie_id'=>5,

        ]);


        DB::table('subcategories')->insert([
            'naam'=>'Vloer',
            'subcat_linknaam'=>'vloer',
            'beschrijving' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore necessitatibus quibusdam expedita aut, ratione maiores praesentium laboriosam sapiente blanditiis, sit doloremque laudantium culpa fugiat provident numquam, veniam aliquid error!',    
            'categorie_id'=>2,

        ]);

        


    }
}
