@extends('layout.app')

@section('content')

<main>

    <div class="home_container">

        @foreach($viaggi as $viaggio)
        <div class="card_viaggio">

            <div class="destinazione">
                <h1>Destinazione: {{$viaggio->destinazione}}</h1>
                <img src="{{$viaggio->img}}" alt="">
                <a href="{{route('viaggio.show', $viaggio->id)}}">Mostra questo Hotel</a> 
            </div>

            <div class="descrizione">
                <h4>Hotel {{$viaggio->hotel}}</h4>
                <p>{{$viaggio->descrizione}}</p>
            </div>
            
            <div class="valutazione">
                <h5>Valutato: {{$viaggio->valutazione}} su 10</h5>
                <h3>{{$viaggio->prezzo}}€ a notte</h3>
            </div>
            
        </div>
        @endforeach

    </div>

</main>


@endsection