<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Redesigned Homepage demo.blade.php
Route::get('/', function () {
    return view('demo');
});

//Test lives at localhost/test
Route::get('/test', function () {
    return view('test');
});


Route::get('/add-post-form', function () {
    return view('add-post-form');
});

Route::get('add-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);

// Redesigned Homepage
Route::get('/demo', function () {
    return view('demo');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);
Route::post('/contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
