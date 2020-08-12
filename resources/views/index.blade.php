{{--$popularMovies--}}
{{--$nowPlayingMovies--}}
{{--$genres--}}
@extends('layouts.main')
@section('content')
    <div class="mx-auto px-4 pt-16" xmlns="http://www.w3.org/1999/html">
        <x-movie-section name="Popular Movies" margin="mt-0">
            @slot('content')
                @if($popularMovies->count())
                    @foreach($popularMovies->slice(10) as $movie)
                        <x-movie-grid-item :movie="$movie" :genres="$genres"></x-movie-grid-item>
                    @endforeach
                @endif
            @endslot
        </x-movie-section>
        <x-movie-section name="Now Playing" margin="mt-16">
            @slot('content')
                @if($nowPlayingMovies->count())
                    @foreach($nowPlayingMovies->slice(10) as $movie)
                        <x-movie-grid-item :movie="$movie" :genres="$genres"></x-movie-grid-item>
                    @endforeach
                @endif
            @endslot
        </x-movie-section>
    </div>
@endsection
