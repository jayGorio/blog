@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="col-lg-10 col-lg-offset-2">

       <!--  Page heading -->
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header">
                   Enrollment <small>Enroll Student</small>
               </h1>
           </div>
       </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Enrollee Form</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['method'=> 'put', 'class' => 'form-horizontal']) !!}

                            <div class="form-group">
                                {!! Form::label('first_name',null, ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-7">
                                    {!! Form::text('first_name',null, ['class' => 'form-control', 'placeholder' => 'Enter first name']) !!}
                                </div>
                                
                            </div>

                            <div class="form-group">
                                {!! Form::label('middle_name',null, ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-7">
                                    {!! Form::text('middle_name',null, ['class' => 'form-control', 'placeholder' => 'Enter middle name']) !!}
                                </div>    
                            </div>

                            <div class="form-group">
                                {!! Form::label('last_name',null, ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-7">
                                    {!! Form::text('last_name',null, ['class' => 'form-control', 'placeholder' => 'Enter last name']) !!}
                                </div>                               
                            </div>

                            <div class="form-group">
                                {!! Form::label('course_name',null, ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-7">
                                    {!! Form::select('course_name',['hrs' => 'HRS','it' => 'IT'],null, ['class' => 'form-control', 'placeholder' => 'Choose course name']) !!}
                                </div>                               
                            </div>

                            <div class="form-group">
                                {!! Form::label('semester',null, ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-7">
                                    {!! Form::select('semester',['first' => 'First 2016','second' => 'Second 2016'],null, ['class' => 'form-control', 'placeholder' => 'Choose Semester']) !!}
                                </div>                           
                            </div>

                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-4">
                                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>

                          
                        {!! Form::close() !!}
                    </div> <!-- end of panel body -->
                </div> <!-- end of panel -->
            </div> <!-- end of col-lg-6 -->
           
            <div class="col-lg-7">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>ID Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan de la Cruz</td>
                            <td>12345679</td>
                            <td>Unofficially Enrolled</td>
                            <td>
                                <button class="btn btn-xs btn-info">Edit</button>
                                <button class="btn btn-xs btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div> <!-- end of col-lg-7 -->

        </div> <!-- end of row -->

        <div class="row">
             <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registration Form</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('id_no', 'ID Number', ['class' => 'col-md-3 control-label']) !!}                       
                            <div class="col-md-8">
                                {!! Form::text('id_no', null, ['class' => 'form-control']) !!}
                            </div>                           
                        </div>

                        <div class="form-group">
                            {!! Form::label('civil_status', null, ['class' => 'col-md-3 control-label']) !!}                       
                            <div class="col-md-8">
                                {!! Form::select('civil_status', 
                                    ['s' => 'Single', 'm' => 'Married','S' => 'Separated'],
                                    null, ['class' => 'form-control', 'placeholder' => 'Please select status']) !!}
                            </div>                           
                        </div>
                        <div class="form-group">
                            {!! Form::label('no_of_children', 'No of Children', ['class' => 'col-md-3 control-label']) !!}                       
                            <div class="col-md-8">
                                {!! Form::select('no_of_children', 
                                    ['one' => '1', 'two' => '2','three' => '3'],
                                    null, ['class' => 'form-control', 'placeholder' => 'Please select no of children']) !!}
                            </div>                           
                        </div>


                        <div class="form-group">
                            {!! Form::label('spouse',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::text('spouse',null, ['class' => 'form-control', 'placeholder' => 'Enter spouse name']) !!}
                            </div>                           
                        </div>

                        <div class="form-group">
                            {!! Form::label('sex', null, ['class' => 'col-md-3 control-label']) !!}                       
                            <div class="col-md-8">
                                <label class="radio-inline">
                                    <input type="radio" name="male" value="Male">Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="female" value="Female">Female
                                </label>
                            </div>                           
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_no',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::text('contact_no',null, ['class' => 'form-control', 'placeholder' => 'Enter contact number']) !!}
                            </div>                           
                        </div>

                        <div class="form-group">
                            {!! Form::label('email',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::text('email',null, ['class' => 'form-control', 'placeholder' => 'Enter email address']) !!}
                            </div>                           
                        </div>
                        <h3 class="page-header"></h3>
                        <div class="form-group">
                            {!! Form::label('permanent_address',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::text('permanent_address',null, ['class' => 'form-control', 'placeholder' => 'Enter permanent address']) !!}
                            </div>                           
                        </div>
                        <div class="form-group">
                            {!! Form::label('baguio_city_address',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::text('baguio_city_address',null, ['class' => 'form-control', 'placeholder' => 'Enter baguio city address']) !!}
                            </div>                           
                        </div>
                        <div class="form-group">
                            {!! Form::label('name_of_mother',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::text('name_of_mother',null, ['class' => 'form-control', 'placeholder' => 'Enter name of mother']) !!}
                            </div>                           
                        </div>
                        <div class="form-group">
                            {!! Form::label('name_of_father',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::text('name_of_father',null, ['class' => 'form-control', 'placeholder' => 'Enter name of father']) !!}
                            </div>                           
                        </div>
                        <h3 class="page-header"></h3>
                        <div class="form-group">
                            {!! Form::label('elem_address','Elementary', ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-5">
                                {!! Form::text('elem_address',null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                            </div>  
                            <div class="col-md-3">
                                {!! Form::text('elem_grad_date',null, ['class' => 'form-control', 'placeholder' => 'Graduation Date']) !!}
                            </div>                          
                        </div>

                        <div class="form-group">
                            {!! Form::label('secon_address','Secondary', ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-5">
                                {!! Form::text('secon_address',null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                            </div>  
                            <div class="col-md-3">
                                {!! Form::text('secon_grad_date',null, ['class' => 'form-control', 'placeholder' => 'Graduation Date']) !!}
                            </div>                          
                        </div>

                        <div class="form-group">
                            {!! Form::label('post_second_address','Post Secondary', ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-5">
                                {!! Form::text('post_second_address',null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                            </div>  
                            <div class="col-md-3">
                                {!! Form::text('post_second_grad_date',null, ['class' => 'form-control', 'placeholder' => 'Graduation Date']) !!}
                            </div>                          
                        </div>

                        <h3 class="page-header"></h3>
                        <div class="form-group">
                            {!! Form::label('employment_status', null, ['class' => 'col-md-3 control-label']) !!}                       
                            <div class="col-md-8">
                                {!! Form::select('employment_status', 
                                    ['one' => 'Unemployed', 'two' => 'Self Employed','three' => 'Employed'],
                                    null, ['class' => 'form-control', 'placeholder' => 'Please select employment status']) !!}
                            </div>                           
                        </div>
                        <div class="form-group">
                            {!! Form::label('name_of_employer',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-5">
                                {!! Form::text('name_of_employer',null, ['class' => 'form-control', 'placeholder' => 'Employer name']) !!}
                            </div>  
                            <div class="col-md-3">
                                {!! Form::text('employment_date',null, ['class' => 'form-control', 'placeholder' => 'Date Employed']) !!}
                            </div>  
                            <div class="col-md-5 col-md-offset-3 field-with-margin" >
                                {!! Form::text('employment_address',null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                            </div>                        
                        </div>

                        <div class="form-group">
                            {!! Form::label('person_to_notify',null, ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-5">
                                {!! Form::text('person_to_notify',null, ['class' => 'form-control', 'placeholder' => 'Complete Name']) !!}
                            </div>  
                            <div class="col-md-3">
                                {!! Form::text('relationship',null, ['class' => 'form-control', 'placeholder' => 'Relationship']) !!}
                            </div>  
                            <div class="col-md-5 col-md-offset-3 field-with-margin">
                                {!! Form::text('person_to_notify_address',null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                            </div> 
                            <div class="col-md-3 field-with-margin" >
                                {!! Form::text('person_to_notify_contact',null, ['class' => 'form-control', 'placeholder' => 'Contact Number']) !!}
                            </div>                      
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div> <!-- end of panel default -->
            </div> <!-- end of col-lg-6 -->
        </div>

    </div> <!-- end of col-lg-10 with offset -->

 </div> <!-- end of page wrapper -->
@endsection
