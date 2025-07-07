<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Livewire\Add;
use App\Livewire\Favourite;
use App\Livewire\Gallery;
use App\Livewire\Show;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/gallery', Gallery::class)->name('gallery');
    Route::get('/add', Add::class)->name('add');
    Route::get('/favourites', Favourite::class)->name('favourites');
    Route::get('/show/{id}', Show::class)->name('show');
});




//auth
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::get('/signup', [RegisterController::class, 'create'])->name('register');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/signup', [RegisterController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
