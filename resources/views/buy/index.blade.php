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
                                </select>
                            </div>
                     </div>

                    </div>
                     </form>


@endsection