@extends('layout.default')
@section('content')

    <form action="{{route('comics.store')}}" method="post">
        @csrf
        {{-- titolo --}}
        <label for="title">titolo</label>
        <input type="text" name="title" id="title">
        {{-- descrizione --}}
        <label for="description">descrizione</label>
        <input type="text" name="description" id="description">
        {{-- url img --}}
        <label for="thumb">url immagine</label>
        <input type="text" name="thumb" id="thumb">
        {{-- prezzo --}}
        <label for="price">prezzo US</label>
        <input type="number" name="price" id="price">
        {{-- serie --}}
        <label for="series">serie</label>
        <input type="text" name="series" id="series">
        {{-- data uscita --}}
        <label for="sale_date">data uscita</label>
        <input type="text" name="sale_date" id="sale_date">
        {{-- tipo --}}
        <label for="type">tipologia</label>
        <input type="text" name="type" id="type">

        <input type="submit" value="invia">
    
    </form>
    <a href="{{ route('comics.index') }}">back in  fumetti</a>
@endsection