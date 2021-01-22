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

//Home
Route::get('/', function () {cd ..
    return view('demo');
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

Route::get('/deluxe', function () {
    return view('deluxe');
});


Route::get('/value_grid_plus', function () {
    return view('value_grid_plus');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/gallery_deluxe', function () {
    return view('gallery_deluxe');
});

Route::get('/gallery_value', function () {
    return view('gallery_value');
});

Route::get('/gallery_vending', function () {
    return view('gallery_vending');
});
