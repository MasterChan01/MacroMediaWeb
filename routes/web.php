<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/public', [App\Http\Controllers\HomeController::class, 'index'])->name('public');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/js/app.js', 'App\Http\Controllers\Jscontroller@getAppJs');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [App\Http\Controllers\ContactController::class, 'sendContactForm'])->name('contact.send');
Route::get('/email', [App\Http\Controllers\ContactController::class, 'sendContactForm']);
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/signup', [App\Http\Controllers\SignUpController::class, 'index'])->name('signup');

Route::group(['middleware' => 'web'], function () {});
