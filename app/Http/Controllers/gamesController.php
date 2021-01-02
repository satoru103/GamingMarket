<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class gamesController extends Controller
{
    public function index(){
        $games=Game::all();
        return view('index',['games'=>$games]);
    }
}
