@extends('layout.app')



@section("content")

<h1>Destinazioni</h1>
@foreach($viaggi as $viaggio)

<a href="{{route('viaggio.show', $viaggio->id)}}">{{$viaggio->destinazione}}</a>


@endforeach

<a href="{{route('viaggio.create')}}">Aggiungi un viaggio</a>

@endsection