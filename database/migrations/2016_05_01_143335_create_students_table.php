<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->string('id_no')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');            
            $table->date('semester');
            $table->boolean('status');
            $table->string('civil_status');
            $table->integer('no_of_children');
            $table->string('spouse');
            $table->string('sex');
            $table->string('contact_no');
            $table->string('email');
            $table->string('permanent_address');
            $table->string('baguio_city_address');
            $table->string('name_of_mother');
            $table->string('name_of_father');
            $table->string('elem_address');
            $table->string('elem_grad_date');
            $table->string('secon_address');
            $table->date('secon_grad_date');
            $table->string('post_second_address');
            $table->date('post_second_grad_date');
            $table->string('employment_status');
            $table->string('name_of_employer');
            $table->date('employment_date');
            $table->string('employment_address');
            $table->string('person_to_notify');
            $table->string('relationship');
            $table->string('person_to_notify_address');
            $table->string('person_to_notify_contact');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
