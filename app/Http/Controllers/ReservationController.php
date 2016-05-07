<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Student;

class ReservationController extends Controller
{
    public function create($id)
    {
    	return view('reservation.form');
    }

    public function store()
    {

    }

    public function show()
    {

    }
}
