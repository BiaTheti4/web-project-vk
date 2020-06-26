<?php

namespace App\Http\Controllers;

use App\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show(){
        return(Welcome::all());
    }
}
