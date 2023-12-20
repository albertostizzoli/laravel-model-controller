@extends('layouts.app')

@section('title', 'Movie')

@section('content')



    <div class="container mt-2">
        <div class="row gy-4">
            <div class="col-12 col-md-3 col-lg-4">
                <div class="card mt-4">
                    <img class="card-img-top" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                    <div class="card-title">
                        <h5>{{ $movie->original_title }}</h5>
                    </div>
                    <div class="d-flex justify-content-around align-items-center">
                        <h6>{{ $movie->language }}</h6>
                        <h6>{{ $movie->vote }}</h6>
                    </div>
                </div>
                <a href="{{ route('movies.index') }}" class="btn btn-primary">Indietro</a>
            </div>
        </div>
    </div>
@endsection
