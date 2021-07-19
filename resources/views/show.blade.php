@extends('layout.app')

@section('content')

<div class="show_container">

    <h1>{{$viaggio->destinazione}}</h1>
    <img src="{{$viaggio->url}}" alt="">
    <p>{{$viaggio->descrizione}}</p>
    <h2>Price: {{$viaggio->prezzo}}$</h2>

</div>

<div class="button">
    <a href="{{route('index')}}">Go back to index</a>
</div>



@endsection