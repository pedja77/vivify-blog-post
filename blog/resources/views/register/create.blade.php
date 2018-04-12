@extends('layouts.master')

@section('title')

        Create new post

@endsection

@section('content')
    <h2>Register</h2>

    

    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name:</title>
            <input type="text" name="name" class="form-control" id="name">
            @include('partials.error-message', ['fieldTitle' => 'name'])
        </div>
        <div class="form-group">
            <label for="email">Email:</title>
            <input type="text" name="email" class="form-control" id="email">
            @include('partials.error-message', ['fieldTitle' => 'email'])
        </div>
        <div class="form-group">
            <label for="password">Password:</title>
            <input type="password" name="password" class="form-control" id="password">
            @include('partials.error-message', ['fieldTitle' => 'password'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
            

        
    </form>
@endsection