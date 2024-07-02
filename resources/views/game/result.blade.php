@extends('app')

@section('title', 'Game result')

@section('content')

    <h1>You {{ $game->score ? 'Win' : 'Lose' }}</h1>
    <p>Score {{ $game->score }}</p>
@endsection
