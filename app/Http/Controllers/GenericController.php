<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class GenericController extends Controller
{
    public function landing (Request $request){
        return view (view: 'landing');
    }

    public function generateToken(Request $request){

        if (auth() -> user() -> hasRole('admin')){
            $user = User::find(auth() -> id());
            $tokenName = $request->name ? $request->name : $user->name.'\'s Token';
            $token = $user -> createToken($tokenName) -> accessToken;  //criacao do token     
            return view('displayTokens', compact('token'));
            // return redirect()->to('/admin/oauth-access-tokens') -> with(['token' => $token]);
        }else{
            dd('Erro: O user nao tem permissao para gerar o Token');
        }
    }

}
