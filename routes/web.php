<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gamesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\cartsController;

Auth::routes();
Route::group(['middleware'=>['auth']],function(){
    Route::get('/',[gamesController::class,'index'])->name('game.index');
    Route::get('/game/{id}',[gamesController::class,'show'])->name('game.show');


    // cart
    Route::get('/cart',[cartsController::class,'index'])->name('cart.index');
    Route::post('/cart/store',[cartsController::class,'store'])->name('cart.store');

});

