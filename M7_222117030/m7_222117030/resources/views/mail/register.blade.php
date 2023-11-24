@extends('templates.main_template')


@section('header')
    <div class="container">
        <div class="col justify-content-center">
            <h1 class="row">Register</h1>
        </div>
    </div>
@endsection

@section('content')
    <form action="{{ route('go-to-mail-register-handler') }}" method="post">
        @csrf
        <div class="col">
            Name
            <input type="text" name="name" id="name">
        </div>
        <div class="col">
            Email
            <input type="email" name="email" id="email">
        </div>
        <div class="col">
            password
            <input type="password" name="password" id="password">
        </div>
        <div class="col">
            Phone Number
            <input type="tel" name="phone" id="phone">
        </div>
        <div class="col">
            <button type="submit" value="login">Register</button>
        </div>
        <div class="col">
            Already have account? <a href="{{ route('go-to-mail-login') }}">Login</a>
        </div>
    </form>
@endsection
