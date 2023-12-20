@extends('layouts.app')

@section('title')

@section('content')

@foreach($movies as $movie)
<li><a href="{{route('movies.show', $movie->id)}}">{{$movie->title}}</a></li>
@endforeach
@endsection
