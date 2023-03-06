<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Games;
use Illuminate\Http\Request;

class GameController extends Controller
{

    /**
     * @OA\Get(
     *     tags={"All Games"},
     *     summary="Devolve todos os jogos",
     *     description="Catálogo de Jogos",
     *     path="/api/games",
     *     @OA\Response(response="200", description="A list with courses"),
     * ),
     * @OA\Get(
     *     tags={"Specific Game"},
     *     summary="Devolve um jogo especifico",
     *     description="Detalhes do jogo",
     *     path="/api/game/{id}",
     *     @OA\Response(response="200", description="A list with courses"),
     * ),
     */


    public function index(){
        return view('home', [
            'games' => Games::all()
        ]);
    }

    public function game($id){
        return view('game', ['game' => Games::find($id)]);
    }

    public function search(Request $request){
        return view('search', ['games' => Games::findByName($request->game)]);
    }

    public function sale(){
        return view('sale', ['games' => Games::findBySale()]);
    }

    public function filter(Request $request){
        return view('filter', ['games' => Games::findByFilter(
            $request->platform,
            $request->genre,
            $request->orderby)
        ]);
    }

    public function getGameAPI($id){
        return Games::find($id);
    }

    public function getGamesAPI(){
        return Games::all();
    }

    public function searchGamesAPI(Request $request){
        return Games::findByName($request->game);
    }

    public function getSaleAPI(){
        return Games::findBySale();
    }

    public function filterGamesAPI(Request $request){
        return Games::findByFilter($request->platform, $request->genre, $request->orderby);
    }



}
