@extends('templates.main_template')

@section('header')
    <h1>
        Welcome, {{ Session::get('currentBilliardLogin')['name'] }}</h1><button>History</button>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach (Session::get('billiard-meja') as $item)
                <form action="{{ route('billiard-table-handler') }}" method="post" class="col-md-4 border mb-4">
                    @csrf
                    <h1>{{ $item['nama'] }}</h1>
                    @if ($item['kosong'] == true)
                        <div class="">
                            <div class="col">
                                <p>Waktu</p>
                                <input type="text" class="form-control" name="waktu" id="waktu">
                            </div>
                            <div class="col">
                                <button class="" type="button" name="play-button">Play</button>
                            </div>
                        </div>
                    @endif
                    @if ($item['kosong'] == false)
                        <div class="col">
                            <div class="col">
                                <p>Waktu : {{ $item['time'] }} menit</p>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="waktu" id="waktu">
                                    <div class="input-group-append">
                                        <button class="" type="button" name="add-button">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-2">
                                <button class="">Finish</button>
                            </div>
                        </div>
                    @endif
                </form>
            @endforeach
        </div>
    </div>
@endsection
