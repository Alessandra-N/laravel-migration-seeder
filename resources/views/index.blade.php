@extends('layout.app')

@section("content")

<div class="container_index">
        <table style="width:100%">
            <tr>
                <th>Destinazione</th>
                <th>URL immagine</th>
                <th>Hotel</th>
                <th>Valutazione</th>
                <th>Prezzo</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
            @foreach($viaggi as $viaggio)
            <tr>
                <td>{{$viaggio->destinazione}}</td>
                <td><img src="{{$viaggio->img}}" alt=""></td>
                <td>{{$viaggio->hotel}}$</td>
                <td>{{$viaggio->valutazione}}$</td>
                <td>{{$viaggio->prezzo}}$</td>
                <td>{{$viaggio->descrizione}}$</td>

                <td>
                    <a href="{{route('viaggio.show', $viaggio->id)}}">View</a> 
                    | <a href="{{route('viaggio.edit', $viaggio->id)}}">Edit</a>
                    <form action="{{route('viaggio.destroy', $viaggio->id)}}" method="post" onsubmit="return confirm('vuoi davvero cancellare questo viaggio?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">Destroy</button>
                    </form>
                     
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="button">
        <a href="{{route('viaggio.create')}}">Aggiungi un viaggio</a>
    </div>

@endsection