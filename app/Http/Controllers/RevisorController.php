<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();

        return view('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article)
    {

        $article->setAccepted(true);
        return redirect()
            ->back()
            ->with('message', __('ui.acceptedarticle') . $article->title);
    }

    public function reject(Article $article)
    {

        $article->setAccepted(false);
        return redirect()
            ->back()
            ->with('message', __('ui.rejectedarticle') . $article->title);
    }
    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('welcome')->with('message', __('ui.congratulation'));
    }
    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }

    public function recover()
    {

        $article_to_recover = Article::whereNotNull('is_accepted')->latest()->first();

        if ($article_to_recover) {
            $article_to_recover->is_accepted = null;
            $article_to_recover->save();
        };

        return redirect()
            ->back()
            ->with('message', __('ui.previewmod'));
    }
}
