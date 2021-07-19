@extends('layout.app')



@section("content")

<h1>Destinazioni</h1>
@foreach($viaggi as $viaggio)


<h2>{{$viaggio->destinazione}}</h2>

@endforeach

<a href="{{route('viaggio.create')}}">Aggiungi un viaggio</a>

@endsection