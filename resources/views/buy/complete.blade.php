@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
        <div class="cart-body">
            購入完了しました        
        </div>
        </div>
    </div>
</div>
<a href="{{route('game.index')}}">戻る</a>
@endsection