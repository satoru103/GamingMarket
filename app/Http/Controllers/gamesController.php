<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class gamesController extends Controller
{
    public function index(){
        $games=Game::paginate(10);
        return view('index',['games'=>$games]);
    }
}
