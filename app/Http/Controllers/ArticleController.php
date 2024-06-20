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

    public function index(){
        $articles = Article::orderBy('created_at','desc')->paginate(6);
        return view('article.index',compact('articles'));
    }
}

