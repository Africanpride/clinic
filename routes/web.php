<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()) {
        return view('dashboard');
    }
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('profile', ProfileController::class)->middleware(['auth','verified']);
// Route::resource('users', RegisteredUserController::class)->middleware(['auth','verified']);

Route::resource('posts', App\Http\Controllers\PostController::class);

Route::resource('ministers', App\Http\Controllers\MinisterController::class);

Route::resource('profiles', App\Http\Controllers\ProfileController::class);

Route::resource('users', App\Http\Controllers\UserController::class)->middleware(['auth']);

Route::resource('events', App\Http\Controllers\EventController::class);
require __DIR__.'/auth.php';





