@extends('templates.main_template')

@section('header')
    <div class="container">
        <div class="col justify-content-center">
            <h1 class="row">Welcome to Webio</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="col">
        <a href="{{ route('go-to-mail-login') }}" class="row">
            <button>Go to Mail</button>
        </a>
    </div>
    <div class="col">
        <div class="row">
            <a href="{{ route('go-to-billiard-login') }}" class="row">
                <button>Go to Biliard</button>
            </a>
        </div>
    </div>
@endsection
