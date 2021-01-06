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
                        <select name="quantity" value="{{$cart->quantity}}個">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                        <button type="submit" class="btn btn-primary">更新</button>
                    </form>
                    <form action="{{route('cart.destroy',['cart'=>$cart->id])}}" method="delete">
                        @csrf
                        <button type="submit" class="btn btn-primary">削除</button>
                    </form>
                </div>    
                @endforeach
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                {{$sum}}円
            </div>
        </div>
    </div>
</div>
@endsection