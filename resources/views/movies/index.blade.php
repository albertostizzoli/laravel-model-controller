@extends('layouts.app')

@section('title' . 'Movies')

@section('content')

    <div class="container mt-2">
        <div class="row gy-4">
            <h1 class="text-center">Movies</h1>
            @foreach ($movies as $movie)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        <div class="card-title">
                            <h5>{{ $movie->original_title }}</h5>
                        </div>
                        <div class="d-flex justify-content-around align-items-center">
                            <h6>{{ $movie->language }}</h6>
                            <h6>{{ $movie->vote }}</h6>
                        </div>
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Informazioni</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
