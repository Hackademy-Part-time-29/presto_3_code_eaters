<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/',[PageController::class, 'welcomeView'])->name('welcome');
Route::get('/articles',[ArticleController::class, 'articleView'])->name('articles');

Route::get('/create/article',[ArticleController::class, 'create'])->middleware('auth')->name('create.article');
Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
Route::get('/show/article/{article}',[ArticleController::class, 'show'])->name('article.show');


