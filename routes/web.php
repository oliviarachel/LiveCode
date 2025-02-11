<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\LoginController;

Auth::routes();

Route::resource('produks', ProdukController::class);
Auth::routes();

Route::get('/', function () {
    return redirect('/login');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');