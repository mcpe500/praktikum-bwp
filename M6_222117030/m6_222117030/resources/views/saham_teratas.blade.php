@extends('templates.saham_teratas_template')

@section('grafik')
    {!! $chart->container() !!}

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection

@section('saham_teratas')
    @foreach ($data as $index => $item)
        @if ($index < 3)
            <a href="{{ url('/saham-detail/' . $item['symbol']) }}" class="text-decoration-none">
                <div class="card my-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mx-5">{{ $item['company'] }}</div>
                            <div class="col mx-5">
                                @foreach (explode(' ', $item['description']) as $len => $desc)
                                    @if ($len < 5)
                                        {{ $desc }}
                                    @endif
                                    @if ($len == 5)
                                        ...
                                    @endif
                                @endforeach
                            </div>
                            <div class="col mx-5">${{ $item['price_2007'] }}</div>
                            <div class="col mx-5">
                                @if ($item['price_rise'] > 0)
                                    <p class="text-success">^{{ $item['price_rise'] }}</p>
                                @endif
                                @if ($item['price_rise'] <= 0)
                                    <p class="text-danger">v{{ $item['price_rise'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endif
    @endforeach
@endsection
