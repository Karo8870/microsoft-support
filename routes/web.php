<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiveInfoController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/give-info', 'give-info')->name('give-info');

Route::post('/give-info/delete/{id}', [GiveInfoController::class, 'deleteScam']);

Route::post('/give-info', [GiveInfoController::class, 'processForm']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
