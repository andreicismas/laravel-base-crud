@extends('layout.default')
@section('content')

    <form action="{{ route('comics.update',$comic->id ) }}" method="post">
        @csrf

        @method('PUT')


        {{-- titolo --}}
        <label for="title">titolo</label>
        <input type="text" name="title" id="title" value={{$comic->title}}>
        {{-- descrizione --}}
        <label for="description">descrizione</label>
        <input type="text" name="description" id="description" value={{$comic->description}}>
      
       
        <input type="submit" value="save">
    
    </form>
    <a href="{{ route('comics.index') }}">back in  fumetti</a>
@endsection