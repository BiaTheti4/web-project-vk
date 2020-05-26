<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function welcomeAction(Request $request)
    {
        return view('welcome');
    }
    public function newsAction(Request $request)
    {
        return view('news');
    }
    public function messagesAction(Request $request)
    {
        return view('messages');
    }
    public function friendsAction(Request $request)
    {
        return view('friends');
    }
    public function communitiesAction(Request $request)
    {
        return view('communities');
    }
    public function musicAction(Request $request)
    {
        return view('music');
    }
    public function chatAction(Request $request)
    {
        return view('chat');
    }
    public function registerAction(Request $request)
    {
        return view('register');
    }
    public function loginAction(Request $request)
    {
        return view('login');
    }
}

