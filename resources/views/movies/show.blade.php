@extends('layouts.app')

@section('title', '$books->title')

@section('content')

<h1>{{$book->title}}</h1>
@endsection
