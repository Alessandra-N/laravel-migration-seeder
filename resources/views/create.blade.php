@extends('layout.app')

@section('content')
  <div class="container_form">
    <div class="form-group">

      <form action="{{route('viaggio.store')}}" method="POST">
        {{ csrf_field() }}
        <label for=""></label>
        <input type="text" name="destinazione" id="destinazione" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci una destinazione</small>

        <label for=""></label>
        <input type="text" name="img" id="img" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci link immagine</small>

        <label for=""></label>
        <input type="text" name="hotel" id="hotel" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci hotel</small>

        <label for=""></label>
        <input type="text" name="valutazione" id="valutazione" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci valutazione</small>

        <label for=""></label>
        <input type="text" name="prezzo" id="prezzo" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci il prezzo</small>

        <label for=""></label>
        <textarea name="descrizione" id="descrizione" class="form-control" placeholder="" aria-describedby="helpId" rows="5" value=""></textarea>
        <small id="helpId" class="text-muted">inserisci descrizione</small>

        <div class="submit">
          <button>Submit</button>
        </div>
        

      </form>

    </div>
      <div class="button">
        <a href="{{route('viaggio.index')}}">Torna all'index</a>
      </div>
  </div>
@endsection