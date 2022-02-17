@extends('layout.base')

@section('content')
    @foreach ($movies as $movie)
        <div class="card">
            <h2>{{$movie -> id}}</h2>
            <h2>{{$movie -> title}}</h2>
            <h3>{{$movie -> original_title}}</h3>
            <h3>{{$movie -> nationality}}</h3>
            <h4>{{$movie -> date}}</h4>
            <h4>{{$movie -> vote}}</h4>
        </div>
    @endforeach
@endsection