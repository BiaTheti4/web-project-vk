<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class authController extends Controller
{
    public function auth(Request $request)
    {


        $user = User::where([['login',$request->login],['password',$request->password]])->first();

        if (is_null($user)){
            return "неверный логин или пароль";
        }
        return redirect('/');
//        Auth::login($user);
//        return back()->withInput();
    }
}
