<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController;

//Guest
Route::get('/', [GuestController::class, 'index']);

//Dashboard
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
