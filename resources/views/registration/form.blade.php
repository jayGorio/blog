@extends('layouts.app')

@section('content')


       <!--  Page heading -->
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header ">
                   Registration <small>Register Students</small>
               </h1>
           </div>
       </div>

        <div class="row">
        
             <div class="col-lg-8">
                @include('errors.errors')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registration Form</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($student,[
                            'method'=> $student->exists ? 'put' : 'post', 
                            'route' => $student->exists ? ['student.update', $student->id] : ['student.store'],
                            'class' => 'form-horizontal'
                        ]) !!}
                        
                        @include('partials.registration-form')

                        {!! Form::close() !!}
                    </div>
                </div> <!-- end of panel default -->
            </div> <!-- end of col-lg-6 -->

            <div class="col-lg-4">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> 
                            List of Enrollees
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group ">
                        @inject('student', 'App\Http\Controllers\StudentController')
                            @foreach($student->index() as $s)
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        {{ $s->first_name }} {{ $s->middle_name }} {{ $s->last_name }}</i>
                                    </h4>
                                    <h5>
                                       ID No.: {{ $s->id_no }}</i>
                                    </h5>
                                   
                                   <a href="{{ route('student.edit', $s->id) }}" class="btn btn-xs btn-primary">Edit Info</a>
                                   
                                   <a href="" class="btn btn-xs btn-danger">Enroll</a> 
                                
                                </div>
                            @endforeach
                          
                        </div>
                        {!! $student->index()->links() !!}
                    </div>
                </div>
                
               <!--  <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>ID Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="enrollee in enrollees">
                            <td>@{{ enrollee.first_name }}</td>
                            <td>@{{ enrollee.id_no }}</td>
                            <td>
                                <button class="btn btn-xs btn-info">Edit</button>
                                <button class="btn btn-xs btn-danger">Enroll</button>
                            </td>
                        </tr>
                    </tbody>
                </table> <!-- end of table --> 
            </div> <!-- end of right column -->
        </div><!--  end of row -->


@endsection

