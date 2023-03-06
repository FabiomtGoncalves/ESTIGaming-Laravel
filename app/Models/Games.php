<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    public static function findByName($name){
        return self::where('name', 'like', '%' . $name . '%')->get();
        //$gamesFound = DB::select("SELECT * FROM games WHERE name LIKE '%$name%'");
    }

    public static function findByFilter($platform, $genre, $orderBy){
        if($orderBy == ''){
            return self::query()
                ->where('platform', 'like', '%' . $platform . '%')
                ->where('genre', 'like', '%' . $genre . '%')
                ->get();
        }
        else{
            return self::query()
                ->where('platform', 'like', '%' . $platform . '%')
                ->where('genre', 'like', '%' . $genre . '%')
                ->orderBy('price', $orderBy)
                ->get();
        }
    }

    public static function findBySale(){
        return self::whereNotNull('sale')->get();
        //$gamesFound = DB::select("SELECT * FROM games WHERE sale is not null");
    }

    public static function sort($request){
        return 'Categoria: ' . $request->category . ' Plataforma: ' . $request->platform;
    }


}
