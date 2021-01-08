@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach($carts as $cart)
                <div class="card-header">
                {{$cart->name}}
                </div>
                <div class="card-body">
                    <div>{{$cart->price}}円</div>
                </div>
                <div class="form-inline">
                    <form action="{{route('cart.update',['cart'=>$cart->id])}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$cart->id}}">
                        <select name="quantity" value="{{$cart->quantity}}個">
                        @if($cart->id==$cart->game_id)
                            <option selected>{{$cart->quantity}}</option>
                        @else
                            <option>{{$cart->quantity}}</option>
                        @endif
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                        <button type="submit" class="btn btn-primary">更新</button>
                    </form>
                    <form method="post" action="{{route('cart.destroy',['cart'=>$cart->id])}}">
                    @csrf
                        <button type="submit" class="btn btn-primary">削除</button>
                    </form>
                </div>    
                @endforeach
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                合計{{$sum}}円
            </div>
            <div class="card-body">
                <button><a href="{{route('buy.index',['carts'=>$carts,'sum'=>$sum])}}">購入画面に進む</a></button>
            </div>
        </div>
    </div>
</div>
@endsection