@extends('layouts.main')
@section('content')
    <x-movie-details></x-movie-details>
    <x-cast-section>
        @slot('cast')
            <x-cast-grid-item></x-cast-grid-item>
            <x-cast-grid-item></x-cast-grid-item>
            <x-cast-grid-item></x-cast-grid-item>
            <x-cast-grid-item></x-cast-grid-item>
            <x-cast-grid-item></x-cast-grid-item>
        @endslot
    </x-cast-section>
@endsection