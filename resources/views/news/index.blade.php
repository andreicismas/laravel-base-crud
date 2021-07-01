@extends('layout.default')
@section('content')
   
    
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Prezzo</th>
        <th>Della serie..</th>
      </tr>
    </thead>

    <tbody>
      @foreach($news as $film)
      <tr>
        <td>{{ $film['title'] }}</td>
        <td>{{ $film['description'] }}</td>
        <td>{{ $film['price'] }}</td>
        <td>{{ $film['series'] }}</td>
        <td>
          {{-- <a href="{{ route('comics.show', $comic->id) }}">Dettagli...</a>
          <a href="{{ route('comics.edit', $comic->id) }}">modifica</a>


          @include('comics.components.btn_destroy',["id"=>$comic->id]) --}}
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>
@endsection