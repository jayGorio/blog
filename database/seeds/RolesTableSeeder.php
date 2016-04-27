<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert([
        	'name' => 'admin',
        	'label' => 'System Admin'
        ]);

        DB::table('roles')->insert([
        	'name' => 'adviser',
        	'label' => 'Enrollment Adviser'
        ]);

        DB::table('roles')->insert([
        	'name' => 'enrollee',
        	'label' => 'MITI Enrollee'
        ]);

        DB::table('roles')->insert([
        	'name' => 'super_admin',
        	'label' => 'System Admin and Site Maintainer'
        ]);
    }
}
