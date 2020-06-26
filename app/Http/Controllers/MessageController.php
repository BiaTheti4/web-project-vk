<?php

namespace App\Http\Controllers;

use App\Article;
use App\Message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function show()
    {
        return (Message::with('user')->get());
    }
}
