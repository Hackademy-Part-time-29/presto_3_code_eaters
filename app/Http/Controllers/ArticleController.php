<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\MacroCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articleView()
    {
        return view('articles');
    }
    public function create()
    {
        return view('article.create');
    }

    public function index(Request $request)
    {
        $uri = $request->path();
        return view('article.index',compact('uri'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function byCategory(Category $category, Request $request)
    {
        $uri = $request->path();
        $articles = $category->articles->where('is_accepted', true);
        return view('article.byCategory', compact('articles', 'category','uri'));
    }

    public function byMacroCategory($macroCategoryId, Request $request)
    {
        $uri = $request->path();
        $macroCategory = MacroCategory::findOrFail($macroCategoryId);
        $categories = Category::where('macroCategory_id', $macroCategoryId)->get();
        $articles = Article::whereIn('category_id', $categories->pluck('id'))->where('is_accepted', true)->get();

        return view('article.byMacroCategory', [
            'macroCategory' => $macroCategory,
            'articles' => $articles,
            'uri'=>$uri,
        ]);
    }
}
