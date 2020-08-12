{{--$movie--}}
@extends('layouts.main')
@section('content')
    <x-movie-details :movie="$movie">
        @slot('genres')
            @foreach($movie['genres'] as $genre)
                {{$genre['name']}}@if (!$loop->last), @endif
            @endforeach
        @endslot
        @slot('crew')
            @foreach(collect($movie['credits']['crew'])->slice(0,5) as $crew)
                <div class="flex-col mb-2 @if (!$loop->last) mr-6 @endif">
                    <div class="font-normal">{{$crew['name']}}</div>
                    <div class="font-light text-gray-400 text-sm">{{$crew['job']}}</div>
                </div>
            @endforeach
        @endslot
    </x-movie-details>
    @if(collect($movie['credits']['cast'])->count()>0)
        <x-media-section title="Cast">
            @slot('media')
                @foreach($movie['credits']['cast'] as $cast)
                    <x-cast-grid-item :cast="$cast"></x-cast-grid-item>
                @endforeach
            @endslot
        </x-media-section>
    @endif
    @if(collect($movie['images']['posters'])->count()>0)
        <x-media-section title="Posters">
            @slot('media')
                @foreach($movie['images']['posters'] as $poster)
                    <x-poster-grid-item :poster="$poster"></x-poster-grid-item>
                @endforeach
            @endslot
        </x-media-section>
    @endif
    @if(collect($movie['images']['backdrops'])->count()>0)
        <x-media-section title="Images">
            @slot('media')
                @foreach($movie['images']['backdrops'] as $backdrop)
                    <x-backdrop-grid-item :backdrop="$backdrop"></x-backdrop-grid-item>
                @endforeach
            @endslot
        </x-media-section>
    @endif
@endsection
