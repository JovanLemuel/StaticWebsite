<?php

use App\Models\Catalog;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

/*
Route::get('/catalog', function () {
    return view('catalog');
}); */

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/catalog', [CatalogController::class, 'index']);
Route::get('/catalog/{id}', [CatalogController::class, 'show']);
