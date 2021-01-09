@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center" style="margin-bottom:10px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        お届け先入力
                    </div>
                    <div class="card-body">
                     <form action="{{route('buy.store')}}" method="POST">
                     @csrf
                      <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">氏名</label>
                                <input type="text" class="form-controll" name="name" value="{{old('name')}}">
                            </div>
                     </div>

                     <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="postNum">郵便番号</label>
                                <input type="text" class="form-controll" name="postNum" value="{{old('postNum')}}">
                            </div>
                     </div>

                     <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="region">都道府県</label>
                                <select name="region" class="form-control">
                                @foreach(Config::get('region') as $region)
                                    <option value="">{{$region}}</option>
                                @endforeach
                            </div>
                     </div>

                     <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address1">住所1</label>
                                <input type="text" class="form-controll" name="address1" value="{{old('address1')}}">
                            </div>
                     </div>

                     <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address2">住所2</label>
                                <input type="text" class="form-controll" name="address2" value="{{old('address2')}}">
                            </div>
                     </div>

                     <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telephone">電話番号</label>
                                <input type="text" class="form-controll" name="telephone" value="{{old('telephone')}}">
                            </div>
                     </div>

                     <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary" name="post">注文内容を確定する</button>
                            </div>
                     </div>
                     <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @foreach ($carts as $cart)
                        <div class="card-header">
                            {{ $cart->game_name }}
                        </div>
                        <div class="card-body">
                            <div>
                                {{ $cart->price }}円
                            </div>
                            <div>
                                {{ $cart->quantity }}個
                            </div>
                            <div>
                                合計金額
                                {{ $sum }}円
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</form>
@endsection