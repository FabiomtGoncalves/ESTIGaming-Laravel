<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;

class AuthController extends BaseController
{



    public function signin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $authUser = Auth::user();
            $success['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken;
            $success['name'] =  $authUser->name;

            return redirect()->route('account');
            //return $this->sendResponse($success, 'User signed in');
        }
        else{
            return view('login', ['erroLogin' => "Email e/ou Palavra-Passe incorretos."]);
            //return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
    public function signup(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);


        if($validator->fails()){
            return self::backToLoginPage($request)->withErrors($validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        $success['name'] =  $user->name;

        return view('login', ['registoSuccess' => "Registo concluído com sucesso."]);
        //return redirect()->route('login');
        //return $this->sendResponse($success, 'User created successfully.');
    }

    public function backToLoginPage(Request $request){
        return view('login');
    }

    public function logout(Request $request){
        auth()->guard('web')->logout();
        return redirect()->route('home');
    }

    public function signupAPI(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);


        if($validator->fails()){
            return response([
                'message' => 'Erro: Campos inválidos.'
            ], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $token = $user->createToken('estigaming_token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' =>$token
        ];

        return response($response, 201);

    }


    public function signinAPI(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $authUser = Auth::user();
            $token = $authUser->createToken('estigaming_token')->plainTextToken;

            return response([
                'message' => 'Inicio de sessão efetuado com sucesso',
                'user' => $authUser,
                'token' => $token
            ], 201);
            //return $this->sendResponse($success, 'User signed in');
        }
        else{
            return response([
                'message' => 'Falha: Email e/ou Palavra-Passe incorretos.'
            ], 401);
            //return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    public function logoutAPI(Request $request)
    {
        auth()->user()->tokens()->delete();

        return[
            'message' => 'Sessão finalizada.'
        ];

    }


}
