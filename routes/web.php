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
Route::get('/', function () {
    return view('welcome');
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

Route::get('/baron', function () {
    return view('baron');
});


Route::get('/details', function () {
    return view('details');
});
