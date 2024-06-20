<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcomeView(){
        $articles = Article::take(6)->orderBy('created_at','desc')->get();
        return view('welcome',compact('articles'));
        if ($articles->isEmpty()) {
            $articles = collect([]);
        }
    }
}
