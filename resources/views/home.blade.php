@extends('layouts.app')

@section('content')
       <!--  Page heading -->
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header ">
                   Profile <small>Overview</small>
               </h1>
           </div>
       </div>
       <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Hello, {{ Auth::user()->first_name }}</h1>

                    <p>Welcome to your profile page. You may edit your profile through clicking on the button below, or may proceed to registration page.</p>

                    <button class="btn btn-primary btn-lg">Edit Profile</button>
                    <button class="btn btn-success btn-lg">Proceed to Registration</button>
                    
                </div>
            </div>          
       </div>

       <div class="row">
           <div class="col-lg-12">
               
           </div>
       </div>

 </div> <!-- end of page wrapper -->
@endsection

