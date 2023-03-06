<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{
    use HasFactory;

    public static function account($userID){
        return self::query()
            ->join('games', 'orders.game_id', '=', 'games.id')
            ->where('orders.user_id', '=', $userID)
            ->get();
    }

    public static function order($userID){
        $games = DB::table('orders')
            ->join('games', 'orders.game_id', '=', 'games.id')
            ->where('orders.user_id', '=', $userID)
            ->get();
        return $games;
    }

}
