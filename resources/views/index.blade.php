@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($games as $game)
            {{$item->game_name}}
        @endforeach
    </div>
</div>

@endsection