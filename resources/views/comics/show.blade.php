@extends('layout.default')
@section('content')
<h2>dettagli fumetto</h2>

        <em>--id {{ $comic->id }}</em>
        <h3>titolo -{{ $comic->title }}</h3>
        <p>descrizione -{{ $comic->description }}</p>
        <p>prezzo US -{{ $comic->price }}</p>
        <p>serie -{{ $comic->series }}</p>
        <p>data uscita -{{ $comic->sale_date }}</p>
        <p>tipologia -  {{ $comic->type }}</p>

        <a href="{{ route('comics.index') }}">back in  fumetti</a>
@endsection