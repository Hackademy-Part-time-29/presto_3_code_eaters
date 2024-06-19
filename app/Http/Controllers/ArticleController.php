<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articleView(){
        return view('articles');
    }
    public function create(){
        return view('article.create');
    }
}
