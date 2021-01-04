@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach($games as $game)
        <div class="card">
            <div class="card-header"><a href="{{route('game.show',['id'=>$game->id])}}">{{$game->game_name}}</a></div>
            <div class="card-body">{{$game->price}}</div>
            @auth 
                <form action="{{route('cart.store')}}" method="post">
                @csrf  
                <input type="hidden" name="game_id" value="{{$game->id}}">
                <select name="quantity">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
                <button type="submit">カートに入れる</button>
                </form>
            @endauth
        </div>
    @endforeach
    </div>
    <div class="row justify-content-center">
        {{$games->links()}}
    </div>
</div>

@endsection