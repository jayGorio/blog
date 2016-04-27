@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('errors.errors')
            <div class="panel panel-default">
                <div class="panel-heading">MITI Login</div>
                <div class="panel-body">

                    {!! Form::open(['method' => 'POST','url' => 'login', 'class' => 'form-horizontal']) !!}
                    

                        <div class="form-group{{ $errors->has('id_no') ? ' has-error' : '' }}">
                            
                            {!! Form::label('id_no', 'ID Number', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">

                                {!! Form::text('id_no', null, ['class' => 'form-control']) !!}

                                @if ($errors->has('id_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            {!! Form::label('password' , 'Password', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control']) !!}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Password?</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
