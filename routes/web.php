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
Route::get('/MacroCategory/{macroCategory}',[ArticleController::class, 'byMacroCategory'])->name('byMacroCategory');

Route::get('/revisor/index',[RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::get('/revisor/request',[RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}',[RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::patch('/accept/{article}',[RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}',[RevisorController::class, 'reject'])->name('reject');
Route::patch('/recover',[RevisorController::class, 'recover'])->name('recover');

Route::get('/search/article',[PageController::class,'searchArticles'])->name('article.search');
Route::post('/lingua/{lang}', [PageController::class, 'setLanguage'])->name('setLocale');


