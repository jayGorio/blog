<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StudentRequest;

use App\Student;

use Carbon\Carbon;

class StudentController extends Controller
{
    // public function __construct()
    // {
    // 	$this->middleware('auth');
    // }

    public function index()
    {
        $student = Student::latest()->paginate(10);
        
        return $student;

    }

    public function create(Student $student)
    {
        return view('registration.form', compact('student'));
    }

    public function store(StudentRequest $request)
    {
    	$student = Student::create($request->all());

    	$this->createIdNo($student);

        session()->flash('message', 'Successfully registered account. You may edit your account info or continue with the reservation of subjects by clicking on the buttons on the right side.');

    	return back();
    }

    protected function createIdNo($student)
    {
    	$date = Carbon::now();

    	$student->id_no = $date->toDateString().'-'.$student->id;

    	$student->save();

    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('registration.form', compact('student'));
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update($request->all());

        return redirect('student/create')->with('message', 'Successfully updated information!');
    }
}
