@extends('layout.app')

@section('content')

<main>

    <div class="home_container">

        @foreach($viaggi as $viaggio)
        <div class="card">

            <h1>{{$viaggio->destinazione}}</h1>
            <img src="{{$viaggio->img}}" alt="">
            <h2>{{$viaggio->hotel}}$</h2>
            <h2>{{$viaggio->valutazione}}$</h2>
            <h2>{{$viaggio->prezzo}}$</h2>
            <h2>{{$viaggio->descrizione}}$</h2>

        </div>
        @endforeach

    </div>

</main>


@endsection