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
    return view('welcome');
});
Route::get('/sobre', function () {
    return view('welcome');
});
Route::get('/contato', function () {
    return view('welcome');
});
Route::get('/skills', function () {
    return view('welcome');
});
Route::get('/experiencias', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/debug-sentry', function () {
        throw new Exception('My first Sentry error!');
    });
});
