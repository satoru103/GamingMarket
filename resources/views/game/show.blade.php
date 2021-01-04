@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{$game->game_name}}</div>
            <div class="card-body">{{$game->price}}</div>
        </div>
    </div>
    <div class="row justify-content-center">
        <button><a href="{{route('game.index')}}">戻る</a></button>
    </div>
</div>



@endsection