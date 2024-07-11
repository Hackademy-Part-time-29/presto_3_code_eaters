<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\WorkWithUsController;
use App\Http\Controllers\NotificationController;

Route::get('/', [PageController::class, 'welcomeView'])->name('welcome');
Route::get('/articles', [ArticleController::class, 'articleView'])->name('articles');
Route::get('/create/article', [ArticleController::class, 'create'])->middleware('auth')->name('create.article');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
Route::get('/MacroCategory/{macroCategory}', [ArticleController::class, 'byMacroCategory'])->name('byMacroCategory');
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
Route::patch('/recover', [RevisorController::class, 'recover'])->name('recover');
Route::get('/search/article', [PageController::class, 'searchArticles'])->name('article.search');
Route::post('/lingua/{lang}', [PageController::class, 'setLanguage'])->name('setLocale');

// rotta per il work with us

// Rotta per visualizzare il form, accessibile solo agli utenti non loggati
Route::middleware('guest')->get('/work-with-us', [WorkWithUsController::class, 'showForm'])->name('workwithus');

// Rotta per inviare il form, accessibile solo agli utenti non loggati
Route::middleware('guest')->post('/work-with-us', [WorkWithUsController::class, 'submitForm'])->name('workwithus.submit');

//rotta per le notifiche livechat NON TOCCARE, in fase di studio
Route::get('/send-notification', [NotificationController::class, 'sendNotification']);

//rotta per la gestione dei messaggi da livechat
// Route per caricare la vista della live chat
Route::get('/livechat', [ChatController::class, 'index']);
Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('send-message');


