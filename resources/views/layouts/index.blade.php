@extends('movies')

@section('content')
    <div class="row p-3">
        @foreach ($movies as $movie)
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->original_title }}</p>
                        <p class="card-text">{{ $movie->nationality}}
                            <span class="card-text">{{ $movie->date }}</span>
                        </p>
                        <p class="card-text">{{ $movie->vote}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
