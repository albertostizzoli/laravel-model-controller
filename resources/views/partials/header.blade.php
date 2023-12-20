<header>
    <h1 class="text-center text-white text-bg-danger p-3">SHOP</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" {{ Route::currentRouteName() == 'movies.index' ? 'active' : '' }}
                        href="{{ route('movies.index') }}">
                        MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" {{ Route::currentRouteName() == 'books.index' ? 'active' : '' }}
                        href="{{ route('books.index') }}">
                        BOOKS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
