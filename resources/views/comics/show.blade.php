@extends('layout.default')
@section('content')
<h2>dettagli fumetto</h2>


        <h3>titolo -</h3>
        <p>descrizione -</p>
        <p>url immagine -</p>
        <p>prezzo US -</p>
        <p>serie -</p>
        <p>data uscita -</p>
        <p>tipologia -</p>
        <a href="{{ route('comics.index') }}">back in  fumetti</a>
@endsection