<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(LoginRequest $req){
        $credentials = $req->getCredentials();

        if (!Auth::validate($credentials)){
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        }
        
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        
        return $this->authenticated($req, $user);
    }

    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }
}
