<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

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
    return view('pages.home');
})->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login',[LoginController::class,'submit'])->name('login');


Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register', [RegistrationController::class,'store'])->name('registration');


Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');




Route::get('/product/list', [ProductController::class, 'list'])->name('student.list');
Route::get('/product/list', [ProductController::class, 'list'])->name('student.list');
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
