<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/liste', function () {
    return view('Articles.liste');
});

Route::get('/ajouter', function () {
    return view('Articles.ajouter');
});

Route::POST('/ajouter/traitement', [ArticlesController::class, 'ajouter_Articles_traitement']);