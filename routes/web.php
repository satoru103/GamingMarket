<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gamesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Auth::routes();
Route::group(['middleware'=>['auth']],function(){
    Route::get('/',[gamesController::class,'index'])->name('game.index');
    Route::get('/game/{id}',[gamesController::class,'show'])->name('game.show');

});

