<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\isAdmin;

Route::get('/', function () {
    if (Auth::check()) {
        return view('dashboard');
    }
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','isApproved','verified'])->name('dashboard');


Route::resource('profile', ProfileController::class)->middleware(['auth']);
// Route::resource('users', RegisteredUserController::class)->middleware(['auth','verified']);

Route::resource('posts', App\Http\Controllers\PostController::class);

Route::resource('ministers', App\Http\Controllers\MinisterController::class);

Route::resource('users', App\Http\Controllers\UserController::class)->middleware(['auth']);

Route::resource('events', App\Http\Controllers\EventController::class);

require __DIR__ . '/auth.php';

Route::resource('admin', App\Http\Controllers\Admin\AdminController::class)->middleware(['isAdmin','isApproved']);
Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);
Route::resource('permissions', App\Http\Controllers\Admin\PermissionController::class);
