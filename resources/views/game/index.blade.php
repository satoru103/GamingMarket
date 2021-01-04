@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach($games as $game)
        <div class="card">
            <div class="card-header"><a href="{{route('game.show',['id'=>$game->id])}}">{{$game->game_name}}</a></div>
            <div class="card-body">{{$game->price}}</div>
        </div>
    @endforeach
    </div>
    <div class="row justify-content-center">
        {{$games->links()}}
    </div>
</div>

@endsection