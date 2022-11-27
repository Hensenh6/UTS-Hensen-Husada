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

Route::get('/', function () {
    return view('home');
});

Route::get('/publisher', function () {
    return view('publisher');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/category/{id}', [PostController::class,"searchcategory"]);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detailbooks/{id}', [PostController::class,"searchbook"]);

Route::get('/detailpublisher/{id}', [PostController::class,"searchpublisher"]);


