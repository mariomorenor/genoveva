<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::get('/',function(){
    return redirect()->route('home');
});


Auth::routes(['verify'=>false,'reset'=>false,'confirm'=>false,'register'=>false]);

//  MAIN

Route::get('/home',[HomeController::class,'index'])->name('home');

// USER

Route::resource('usuarios', UserController::class);

//BOOK

Route::resource('libros',LibroController::class);