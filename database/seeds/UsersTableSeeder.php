<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

		DB::table('users')->insert([
			'id_no' => '12345678',
			'email' => 'jearsonbata@yahoo.com',
			'password' => Hash::make('123456'),
			'first_name' => 'Jearson',
			'middle_name' => 'Batanes',
			'last_name'  => 'Gomez'
		]);

		DB::table('users')->insert([
			'id_no' => '12345676',
			'email' => 'carol_paran@yahoo.com',
			'password' => Hash::make('123456'),
			'first_name' => 'Carol',
			'middle_name' => 'Mabiasen',
			'last_name'  => 'Paran'
		]);

		DB::table('users')->insert([
			'id_no' => '12345677',
			'email' => 'rhea@yahoo.com',
			'password' => Hash::make('123456'),
			'first_name' => 'Rhea',
			'middle_name' => 'Registrar',
			'last_name'  => 'Custodian'
		]);
    }
}
