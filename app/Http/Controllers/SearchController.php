<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function formSubmit(Request $request){
        $name = $request->input('name');
        return view('search', ['name' => $name]);
    }

    public function index(){
        return view('search');
    }

    public function store(Request $request){
        dd($request->all());
    }

}
