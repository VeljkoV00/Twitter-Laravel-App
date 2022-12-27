<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
//User Routes
Route::get('/profiles/{user}', [UserController::class, 'show'])->name('show_profile');
Route::get('/profiles/{user}/edit', [UserController::class, 'edit'])->name('edit_profile');
Route::put('/profiles/{user}', [UserController::class, 'update'])->name('update_profile');

//Post tweet route
Route::post('/home', [TweetController::class,'store'])->name('tweet_store');
Route::get('/profiles/{user}/tweets/{tweet}',[TweetController::class, 'edit'])->name('edit_tweet');
Route::put('/profiles/{user}/tweets/{tweet}',[TweetController::class, 'update'])->name('update_tweet');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
  




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
