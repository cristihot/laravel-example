<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [MyController::class, 'index'])->name('home');
