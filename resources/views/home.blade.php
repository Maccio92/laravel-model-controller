@extends('layout.base')

@section('content')
<div class="container">
    @foreach ($movies as $movie)
        <div class="card">
            <h2>{{$movie -> id}}</h2>
            <h2>Titolo: {{$movie -> title}}</h2>
            <h3>Titolo Originale: {{$movie -> original_title}}</h3>
            <h3>Nazionalità: {{$movie -> nationality}}</h3>
            <h4>Data di uscita: {{$movie -> date}}</h4>
            <h4>Voto: {{$movie -> vote}}</h4>
        </div>
    @endforeach
</div>
@endsection