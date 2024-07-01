@extends('app')

@section('title', 'Page '.$page->username)

@section('content')
<hr />
    <h2>Page Control</h2>
        <a class="btn btn-primary" href="{{ route('page.updateSlug', ['page' => $page]) }}" role="button">Regenerate Link</a>
        <a class="btn btn-danger" href="{{ route('page.delete', ['page' => $page]) }}" role="button">Delete</a>

    <h2>Game</h2>

    <a class="btn btn-success" href="{{ route('page.game.roll', ['page' => $page]) }}" role="button">Imfeelinglucky</a>
    <a class="btn btn-primary" href="{{ route('page.game.index', ['page' => $page]) }}" role="button">History</a>

@endsection
