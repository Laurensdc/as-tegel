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
			'email'=>'laurens@as-tegel.be',
			'password'=>bcrypt('123456'),
			'role'=>'admin'
	   ]);
		DB::table('users')->insert([
			'firstname'=>'Henk',
			'lastname'=>'De Particulier',
			'email'=>'henk@as-tegel.be',
			'password'=>bcrypt('123456'),
			'role'=>'particulier'
	   ]);
		DB::table('users')->insert([
			'firstname'=>'Jos',
			'lastname'=>'De Handelaar',
			'email'=>'jos@as-tegel.be',
			'password'=>bcrypt('123456'),
			'role'=>'handelaar'
	   ]);


	}
}
