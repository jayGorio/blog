@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    @can('manage_user_account')
                        <a href="#">Manage User Account</a>
                    @endcan

                    @can('create_student_account')
                        <a href="#">Create New Enrollee</a>
                    @endcan
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
