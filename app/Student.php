<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =
    [
	     'course_id',
	     'id_no',
	     'first_name',
	     'middle_name',
	     'last_name',
	     'semester',
	     'status',
	     'civil_status',
	     'no_of_children',
	     'spouse',
	     'sex',
	     'contact_no',
	     'email',
	     'permanent_address',
	     'baguio_city_address',
	     'name_of_mother',
	     'name_of_father',
	     'elem_address',
	     'elem_grad_date',
	     'secon_address',
	     'secon_grad_date',
	     'post_second_address',
	     'post_second_grad_date',
	     'employment_status',
	     'name_of_employer',
	     'employment_date',
	     'employment_address',
	     'person_to_notify',
	     'relationship',
	     'person_to_notify_address',
	     'person_to_notify_contact'
     ];
}
