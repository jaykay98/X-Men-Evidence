<?php

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
Route::get('/', function() {
    return view('home');
});

Route::view('register', 'mutant');
Route::post('register', 'MutantController@createMutant')->name('register');
Route::get('xmen', 'MutantController@index');
Route::view('create', 'register');
Route::post('create', 'XMenController@saveXMan');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@signin')->name('signin');
Route::get('about', function () {
    return view('about');
});
