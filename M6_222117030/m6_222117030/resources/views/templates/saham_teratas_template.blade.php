@extends('templates.main_template')

@section('open-navbar')
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <h5 class="">
                <a href="{{ route('dashboard') }}" class="nav-link active text-light text-decoration-underline"
                    aria-current="page">
                    Saham Teratas
                </a>
            </h5>
        </li>
        <li class="nav-item">
            <a href="{{ route('listSaham') }}" class="nav-link text-light">
                <h5>List Saham</h5>
            </a>
        </li>
    </ul>
    </div>
@endsection

@section('content')
    <div>
        <p>Grafik Keseluruhan</p>
        @yield('grafik')
    </div>
    <div class="mb-5 pb-5">
        <p>Pencarian Teratas</p>
        @yield('saham_teratas')
    </div>
@endsection
