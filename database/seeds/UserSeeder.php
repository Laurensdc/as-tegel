<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Comments table seeder
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname'=>'Laurens',
            'lastname'=>'De Cock',
            'email'=>'test@test.be',
            'password'=>'123',
            'role'=>'admin'

       ]);

    }
}
