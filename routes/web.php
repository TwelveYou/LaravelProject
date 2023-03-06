<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

// Route::post('/contact/submit','app\Http\Controllers\ContactController@submit')
// ->name('contact-form');  // Именное отслеживание URL-адресов
use App\Http\Controllers\ContactController;
Route::post('/contact/submit', [ ContactController::class, 'submit_with_request' ])->name('contact-form');


Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');