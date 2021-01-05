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
                    <div>{{$cart->quantity}}個</div>
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