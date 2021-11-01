<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| General Routes for all user
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {return view('login');})->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register', function () {return view('register');})->name('register');
Route::post('/register', [RegistrationController::class,'store'])->name('registration');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');












/*
|--------------------------------------------------------------------------
| Zone Routes
|--------------------------------------------------------------------------
*/

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/dash', [UserController::class, 'index'])->name('index');
    Route::get('/profile', [UserController::class, 'index'])->name('index');
    Route::post('/', [UserController::class, 'store']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);
    Route::get('/edit', [UserController::class, 'edit']);
    Route::post('/edit', [UserController::class, 'update']);
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/userlist', [UserController::class, 'userlist'])->name('userlist');
    Route::get('/edit/{userId}', [UserController::class, 'edit']);
    Route::post('/edit/{userId}', [UserController::class, 'update']);
});









Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [DashboardController::class, 'index'])->name('home');










Route::get('/product/delete/{id}', [ProductController::class, 'delete']);






