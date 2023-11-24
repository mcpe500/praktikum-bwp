@extends('templates.detail_saham_template')
@section('detail-saham')
    Detail Saham
    <div class="d-flex align-items-center">
        <h1 class="ml-2">{{ $data['symbol'] }}</h1>
        @if ($data['price_rise'] > 0)
            <h1>(</h1>
            <h1 class="ml-2 text-success">^{{ $data['price_2007'] }}</h1>
            <h1>)</h1>
        @else
            <h1>(</h1>
            <h1 class="ml-2 text-danger">v{{ $data['price_2007'] }}</h1>
            <h1>)</h1>
        @endif
    </div>
@endsection

@section('grafik')
    {!! $chart->container() !!}

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection

@section('company-details')
    <p>
        <b>Company : </b>{{ $data['company'] }}
    </p>
    <p>
        <b>Description : </b>{{ $data['description'] }}
    </p>
    <p>
        <b>Initial Price : </b>${{ $data['initial_price'] }}
    </p>
@endsection

@section('action-button')
    <div class="d-flex justify-content-evenly text-light container-fluid vw-100">
        <button class="btn bg-sell text-light" style="flex-basis: 46%">
            <h1>SELL ${{ $data['price_2007'] - 1 }}</h1>
        </button>
        <button class="btn bg-buy text-light" style="flex-basis: 46%">
            <h1>BUY ${{ $data['price_2007'] }}</h1>
        </button>
    </div>
@endsection
