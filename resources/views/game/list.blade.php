@extends('app')

@section('title', 'Your last games')

@section('content')

    @if(!$games->isEmpty())
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Number</th>
              <th scope="col">Score</th>
            </tr>
          </thead>
             <tbody>
            @foreach($games as $game)
             <tr>
              <td>{{$game->rolled_at->toDateTimeString()}}</td>
              <td>{{$game->number}}</td>
              <td>{{$game->score}}</td>
            </tr>
            @endforeach
             </tbody>
        </table>
    @endif
@endsection
