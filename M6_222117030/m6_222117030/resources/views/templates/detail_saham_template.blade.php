@extends('templates.main_template')

@section('open-navbar')
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <h5 class="">
                <a href="{{ route('dashboard') }}" class="nav-link active text-light" aria-current="page">
                    Saham Teratas
                </a>
            </h5>
        </li>
        <li class="nav-item">
            <a href="{{ route('listSaham') }}" class="nav-link text-light text-decoration-underline">
                <h5>List Saham</h5>
            </a>
        </li>
    </ul>
    </div>
@endsection

@section('content')
    @yield('detail-saham')
    @yield('grafik')
    @yield('company-details')
    @yield('action-button')
@endsection
