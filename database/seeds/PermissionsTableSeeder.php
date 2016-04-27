<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();

        DB::table('permissions')->insert([

        	'name' => 'manage_user_account',
        	'label' => 'Manage User Account Info'
        ]);

        DB::table('permissions')->insert([

        	'name' => 'create_student_account',
        	'label' => 'Create Account of Student'
        ]);

        DB::table('permissions')->insert([

        	'name' => 'edit_fee',
        	'label' => 'Edit Tuition Fee of Student'
        ]);

        DB::table('permissions')->insert([

        	'name' => 'record_payment',
        	'label' => 'Record Payment Fee'
        ]);

        DB::table('permissions')->insert([

        	'name' => 'manage_subject_offering',
        	'label' => 'Subject Offering with Assessment per unit'
        ]);

        DB::table('permissions')->insert([

        	'name' => 'print_class_list',
        	'label' => 'Printing of Final Class List'
        ]);

    }
}
