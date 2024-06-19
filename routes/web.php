<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/',[PageController::class, 'welcomeView'])->name('welcome');
Route::get('articles',[ArticleController::class, 'articleView'])->name('articles');
