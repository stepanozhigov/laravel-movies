<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index() {
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular',[
            'api_key'=>config('services.tmdb.token')
        ])->json()['results'];
        $nowPlayingMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing',[
            'api_key'=>config('services.tmdb.token')
        ])->json()['results'];
        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list',[
            'api_key'=>config('services.tmdb.token')
        ])->json()['genres'];
        $genres = collect($genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        return view('index',[
            'popularMovies'=>collect($popularMovies),
            'nowPlayingMovies'=>collect($nowPlayingMovies),
            'genres'=>collect($genres)
        ]);
    }

    public function show($id) {
        $movie = Http::get('https://api.themoviedb.org/3/movie',[
            'api_key'=>config('services.tmdb.token'),
            'movie_id'=>$id
        ]);
        return view('show');
    }
}
