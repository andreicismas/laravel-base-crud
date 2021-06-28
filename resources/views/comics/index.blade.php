@extends('layout.default')
@section('content')
   
    <h2>fumetti disponibili</h2>
    <a href="{{ route('comics.create') }}">Aggiungi serie...</a>

    <table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Titolo</th>
      <th>Prezzo</th>
      <th>Date</th>
    </tr>
  </thead>

  <tbody>
    @foreach($comics as $comic)
    <tr>
      <td>{{ $comic->id }}</td>
      <td>{{ $comic->title }}</td>
      <td>{{ $comic->price }}</td>
      <td>{{ $comic->sale_date }}</td>
      <td>
        <a href="{{ route('comics.show', $comic->id) }}">Dettagli...</a>
        <a href="{{ route('comics.edit', $comic->id) }}">modifica</a>


        @include('comics.components.btn_destroy',["id"=>$comic->id])
      </td>
    </tr>
    @endforeach
  </tbody>

</table>
@endsection