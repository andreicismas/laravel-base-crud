@extends('layout.default')
@section('content')
   
    
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>type</th>
        <th>Prezzo</th>
        <th>Della serie..</th>
        <th>Data uscita</th>
      </tr>
    </thead>

    <tbody>
      @foreach($news as $film)
      <tr>
        <td>{{ $film['title'] }}</td>
        <td>{{ $film['type'] }}</td>
        <td>{{ $film['price'] }}</td>
        <td>{{ $film['series'] }}</td>
        <td>{{ $film['sale_date'] }}</td>
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