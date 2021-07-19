@extends('layout.app')

@section('content')
  <div class="container_form">
    <div class="form-group">

      <form action="{{route('viaggio.update', $viaggio->id)}}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <label for=""></label>
        <input type="text" name="destinazione" id="destinazione" class="form-control" placeholder="" aria-describedby="helpId"  value="{{$viaggio->destinazione}}">
        <small id="helpId" class="text-muted">inserisci una destinazione</small>

        <label for=""></label>
        <input type="text" name="img" id="img" class="form-control" placeholder="" aria-describedby="helpId" value="{{$viaggio->img}}">
        <small id="helpId" class="text-muted">inserisci link immagine</small>

        <label for=""></label>
        <input type="text" name="hotel" id="hotel" class="form-control" placeholder="" aria-describedby="helpId" value="{{$viaggio->hotel}}>
        <small id="helpId" class="text-muted">inserisci hotel</small>

        <label for=""></label>
        <input type="text" name="valutazione" id="valutazione" class="form-control" placeholder="" aria-describedby="helpId" value="{{$viaggio->valutazione}}">
        <small id="helpId" class="text-muted">inserisci valutazione</small>

        <label for=""></label>
        <input type="text" name="prezzo" id="prezzo" class="form-control" placeholder="" aria-describedby="helpId" value="{{$viaggio->prezzo}}">
        <small id="helpId" class="text-muted">inserisci il prezzo</small>

        <label for=""></label>
        <input type="text" name="descrizione" id="descrizione" class="form-control" placeholder="" aria-describedby="helpId" value="{{$viaggio->descrizione}}">
        <small id="helpId" class="text-muted">inserisci descrizione</small>

        <div class="submit">
          <button>Submit</button>
        </div>
        

      </form>

    </div>
      <div class="button">
        <a href="{{route('index')}}">Torna all'index</a>
      </div>
  </div>
@endsection