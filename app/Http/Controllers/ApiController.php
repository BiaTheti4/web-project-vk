<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function welcomeAction(Request $request)
    {
        return view('welcome',['welcome'=> (new WelcomeController())->show()]);
    }
    public function newsAction(Request $request)
    {
        return view('news', ['news'=> (new newsController())->show()]);
    }
    public function messagesAction(Request $request)
    {
        return view('messages', ['messages'=> (new messageController())->show()]);
    }
    public function friendsAction(Request $request)
    {
        return view('friends', ['friends'=> (new FriendController())->show()]);
    }
    public function communitiesAction(Request $request)
    {
        return view('communities',['communities'=>(new CommunityController())->show()]);
    }
    public function musicAction(Request $request)
    {
        return view('music',['musics'=>(new MusicController())->show()]);
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

    public function search(Request $request)
    {

    }
}

