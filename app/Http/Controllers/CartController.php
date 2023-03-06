<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{


    public function cart(){
        $userID = Auth::user()->id;
        return view('cart', ['cartGames' => Cart::cart($userID)]);
    }

    public function addToCart(Request $request){
        Cart::create($request->all());
        return redirect()->route('cart');
    }

    public function deleteFromCart($id){
        Cart::deleteFromCart($id);
        return redirect()->route('cart');
    }

    public function buy(Request $request){
        $payment = $request->payment;
        $userID = Auth::user()->id;
        Cart::buy($userID, $payment);
        return redirect()->route('account');
    }

    public function getCartAPI(Request $request){
        return Cart::cart($request->user()->id);
    }

    public function addToCartAPI(Request $request){
        $game_key = Str::random(6) . '-' . Str::random(6) . '-' . Str::random(6);
        return Cart::create([
            'user_id' => $request->user()->id,
            'game_id' => $request->game_id,
            'game_key' => $game_key
        ]);
    }

    public function deleteFromCartAPI($id){
        return Cart::deleteFromCart($id);
    }

    public function buyAPI(Request $request){
        Cart::buy($request->user()->id, $request->payment);
        return "Compra efetuada com sucesso. Os jogos estão disponíveis na sua conta.";
    }

}
