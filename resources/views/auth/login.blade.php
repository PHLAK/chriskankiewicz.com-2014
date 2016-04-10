@extends('layouts.no-header')

@section('content')
<div class="container">

    <div class="card col-sm-6 col-sm-offset-3">

        <h2 class="card-title"><i class="fa fa-key fa-fw"></i> Login</h2>

        <div class="card-body">

            {!! Form::open() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    {!! Form::label('email', 'E-mail Address', ['class' => 'control-label' ]) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control input-lg']) !!}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control input-lg']) !!}

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="checkbox">
                                <label>{!! Form::checkbox('remember') !!} Remember Me</label>
                            </div>
                        </div>

                        <div class="col-sm-8 text-right">
                            {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
                        </div>

                    </div>
                </div>

                <hr>

                <div class="text-center">
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                </div>

            {!! Form::close() !!}

        </div>
    </div>

</div>
@endsection
