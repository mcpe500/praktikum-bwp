@extends('templates.main_template')


@section('header')
    <div class="container">
        <div class="col justify-content-center">
            <h1 class="row">Login</h1>
        </div>
    </div>
@endsection

@section('content')
    <form action="{{route('go-to-billiard-login-handler')}}" method="post">
        @csrf
        <div class="col">
            Email
            <input type="email" name="email" id="email">
        </div>
        <div class="col">
            password
            <input type="password" name="password" id="password">
        </div>
        <div class="col">
            <button type="submit" value="login">Login</button>
        </div>
        <div class="col">
            Didn't have an account? <a href="{{ route('go-to-billiard-register') }}">Register</a>
        </div>
    </form>
@endsection
