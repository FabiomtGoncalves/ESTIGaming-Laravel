<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function account(){
        $userID = Auth::user()->id;
        return view('account', ['games' => Orders::account($userID)]);
    }

    public function login(){
        if (Auth::user()){
            return redirect()->route('account');
        } else{
            return view('login');
        }
    }

    public function accountAPI(Request $request){
        return Orders::account($request->user()->id);
    }


}
