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
Route::post('/contact/submit', [ ContactController::class, 'valid' ])->name('contact-form');

Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::get('/contact/all/{id}', 
    [ContactController::class, 'showOneMessage']
)->name('contact-data-one');
Route::get('/contact/all/{id}/update', 
    [ContactController::class, 'updateMessage']
)->name('contact-update');
Route::post('/contact/all/{id}/update', 
    [ContactController::class, 'updateMessageSubmit']
// )->name('contact-update-submit');
)->name('contact-update-submit');

Route::get('/laravel', function () {
    return view('welcome-laravel');
})->name('laravel');