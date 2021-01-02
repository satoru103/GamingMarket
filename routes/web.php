<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gamesController;


Route::get('/',[gamesController::class,'index'])->name('game.index');
Auth::routes();