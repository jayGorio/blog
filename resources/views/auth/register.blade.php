@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-6 col-md-offset-3">

            @include('errors.errors')
        
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">MITI Register User</div>
                </div>


                <div class="panel-body">
                    {!! Form::open(['class'=>'form-horizontal']) !!}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            {!! Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('first_name',null,['class'=> 'form-control', 'v-model' => 'user.first_name']) !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            {!! Form::label('middle_name', 'Middle Name', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('middle_name',null,['class'=> 'form-control', 'v-model' => 'user.middle_name']) !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            {!! Form::label('last_name', 'Last Name', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('last_name',null,['class'=> 'form-control', 'v-model' => 'user.last_name']) !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email', 'Email Address', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email',null,['class'=> 'form-control', 'v-model' => 'user.email']) !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" v-model="user.password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation" v-model="user.password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-md btn-success">
                                    <i class="fa fa-paper-plane-o"></i>
                                    Submit
                                </button>

                                <a href="/login" class="btn btn-md btn-danger">
                                    <i class="fa fa-sign-in"></i>
                                    Login
                                </a>

                            </div>
                            
                        </div>

                    {!! Form::close() !!}
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection

