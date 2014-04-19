@extends('layouts.master')

@section('content')
<div class="container">


    <div class="form-signin">
        <h1 class="form-signin-header">Login</h1>
        {{ Form::open(['route' => 'sessions.store']) }}
        <div class="form-group">
            {{ Form::label('username', 'Username: ')}}
            {{ Form::text('username',NULL,['class' => 'form-control']) }}
            {{ $errors->first('username', '<span class=error>:message</span>') }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password: ')}}
            {{ Form::password('password',['class' => 'form-control']) }}
            {{ $errors->first('password', '<span class=error>:message</span>') }}
        </div>

        <div class="form-group">
            {{ Form::submit('Create user', ['class' => 'btn btn-default']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop
