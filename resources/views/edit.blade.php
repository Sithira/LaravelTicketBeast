@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h3>Update My Info</h3>

                {!! Form::model(Auth::user(), ['method' => "POST", "action" => 'ProfileController@update']) !!}

                    <div class="form-group">
                        {!! Form::label('name', "Name") !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', "Email") !!}
                        {!! Form::email("email", null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('mobile', "Mobile") !!}
                        {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', "Password") !!}
                        <br />
                        <br />
                        Update Password: {!! Form::checkbox('update_password', 0, false)  !!}
                        {!! Form::password("password", ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit("Update Password", ['class' => 'btn btn-block btn-primary']) !!}

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection