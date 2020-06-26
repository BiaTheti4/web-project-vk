<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
//выводит данные из таблицы articles
{
    public function show()
    {
       return (Article::all());
    }
}
