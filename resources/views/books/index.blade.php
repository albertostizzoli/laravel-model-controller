@extends('layouts.app')

@section('title' . 'Books')

@section('content')

    <div class="container mt-2">
        <div class="row gy-4">
            <h1 class="text-center">Books</h1>
            @foreach ($books as $book)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ $book->cover_image }}" alt="{{ $book->title }}">
                        <div class="card-title">
                            <h5>{{ $book->title }}</h5>
                        </div>
                        <div class="d-flex justify-content-around align-items-center">
                            <h6>{{ $book->plot }}</h6>
                        </div>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Informazioni</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
