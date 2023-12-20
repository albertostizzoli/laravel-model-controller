@extends('layouts.app')

@section('title', 'Book')

@section('content')



    <div class="container mt-2">
        <div class="row gy-4">
            <div class="col-12 col-md-3 col-lg-4">
                <div class="card mt-4">
                    <img class="card-img-top" src="{{ $book->cover_image }}" alt="{{ $book->title }}">
                    <div class="card-title">
                        <h5>{{ $book->title }}</h5>
                    </div>
                    <div class="d-flex justify-content-around align-items-center">
                        <h6>{{ $book->plot }}</h6>
                    </div>
                </div>
                <a href="{{ route('books.index') }}" class="btn btn-primary">Indietro</a>
            </div>
        </div>
    </div>
@endsection
