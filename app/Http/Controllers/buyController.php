<?php


namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class buyController extends Controller
{
    public function index(){
        $carts =Cart::select('carts.*','games.game_name','games.price')
        ->join('games','games.id','=','carts.game_id')
        ->get();
        $sum=0;
        foreach($carts as $cart ){
            $sum +=$cart->quantity*$cart->price;
        }
        return view('buy.index',['carts'=>$carts,'sum'=>$sum]);
    }

    public function store(Request $request){
        if($request->has('post')){
            Cart::where('user_id',Auth::id())->delete();
            return view('buy.complete');
        }
        return redirect()->route('game.index');
    }


}
