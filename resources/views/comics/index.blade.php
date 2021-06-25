@extends('layout.default')
@section('content')
   
    <h2>fumetti disponibili</h2>
    {{-- <a href="{{route('comics.show', $comic->id)}}">singolo fumetto</a> --}}
    <a href="{{ route('comics.create') }}">Aggiungi serie...</a>
@endsection