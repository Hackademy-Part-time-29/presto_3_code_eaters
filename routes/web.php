<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/',[PageController::class, 'welcomeView'])->name('welcome');
Route::get('/articles',[ArticleController::class, 'articleView'])->name('articles');

Route::get('/create/article',[ArticleController::class, 'create'])->middleware('auth')->name('create.article');
Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
Route::get('/show/article/{article}',[ArticleController::class, 'show'])->name('article.show');
Route::get('/category/{category}',[ArticleController::class, 'byCategory'])->name('byCategory');
Route::get('revisor/index',[RevisorController::class, 'index'])->name('revisor.index');
Route::get('/accept/{article}',[RevisorController::class, 'accept'])->name('accept');
Route::get('/reject/{article}',[RevisorController::class, 'reject'])->name('reject');



