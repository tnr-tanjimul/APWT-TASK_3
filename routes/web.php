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







/




/*
|--------------------------------------------------------------------------
| Zone Routes
|--------------------------------------------------------------------------
*/

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/', [UserController::class, 'store']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/edit/{id}', [UserController::class, 'update']);
});








Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [DashboardController::class, 'index'])->name('home');





Route::post('/', [ProductController::class, 'store'])->name('product.add');
Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::post('/edit', [ProductController::class, 'update'])->name('product.edit');
Route::get('/view/{id}', [ProductController::class, 'view'])->name('product.view');
Route::get('/contact-us', function () {return view('pages.contact-us');})->name('contact-us');





Route::get('/product/delete/{id}', [ProductController::class, 'delete']);






