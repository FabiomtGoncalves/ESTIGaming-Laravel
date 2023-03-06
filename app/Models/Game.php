<?php
    namespace App\Models;

    use Illuminate\Support\Facades\DB;

    class Game {
        public static function all(){
            $allGames = DB::select('SELECT * FROM games');
            return $allGames;
        }

        public static function find($id){
            $games = self::all();

            foreach ($games as $game){
                if($game->id == $id){
                    return $game;
                }
            }
        }

        public static function findByName($name){
            $gamesFound = DB::select("SELECT * FROM games WHERE name LIKE '%$name%'");
            return $gamesFound;
        }

        public static function sort($request){
            return 'Categoria: ' . $request->category . ' Plataforma: ' . $request->platform;
        }

    }
