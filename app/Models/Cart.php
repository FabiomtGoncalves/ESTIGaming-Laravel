<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;
    //protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'game_id',
        'game_key'
    ];

    public static function cart($userID){
        return self::query()
            ->join('games', 'carts.game_id', '=', 'games.id')
            ->where('carts.user_id', '=', $userID)
            ->get();
    }

    public static function deleteFromCart($id){
        return self::query()->where('cart_id', $id)->delete();
    }

    public static function buy($userID, $payment){
        $timestamp = Carbon::now();
        DB::insert("INSERT INTO orders (user_id, game_id, key_code, order_date, status, payment) SELECT user_id, game_id, game_key, '$timestamp', 'Entregue', '$payment' FROM carts WHERE user_id = '$userID'");
        DB::delete ("DELETE FROM carts WHERE user_id = '$userID'");
        //self:self::destroy();
    }

}
