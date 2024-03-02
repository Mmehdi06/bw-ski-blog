<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Routes for visitors
Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

//Routes for authenticated users
Route::middleware('auth')->group(function () {
    //Routes for authenticated users to edit their profile
    Route::prefix('/profile')->name('profile.')->controller(ProfileController::class)->name('profile.')->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/about', function () {
        return view('about');
    })->name('about');
});

//Routes for posts
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');

//Routes for admins
Route::middleware('admin')->controller(AdminController::class)->group(function () {
    Route::get('/users', 'show')->name('users.index');
    Route::post('/users/{user}/promote', 'promote')->name('users.promote');
    Route::delete('/users/{user}/delete', 'destroy')->name('users.delete');
    Route::post('users/create', 'create')->name('users.createUser');
    Route::get('users/create', 'create')->name('users.createPage');
});

require __DIR__ . '/auth.php';
