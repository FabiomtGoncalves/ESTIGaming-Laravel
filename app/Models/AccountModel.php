<?php
namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountModel {

    /*public static function account(){
        $userID = Auth::user()->id;
        $games = DB::table('orders')
            ->join('games', 'orders.game_id', '=', 'games.id')
            ->where('orders.user_id', '=', $userID)
            ->get();
        return $games;
    }

    public static function order($userID){
        $games = DB::table('orders')
            ->join('games', 'orders.game_id', '=', 'games.id')
            ->where('orders.user_id', '=', $userID)
            ->get();
        return $games;
    }*/

}
