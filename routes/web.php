<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function (){
//    return view('welcome');
//});
//
//Route::get('/show', function (){
//    return view('game.show');
//});


Route::get('/', [GamesController::class, 'index']);
