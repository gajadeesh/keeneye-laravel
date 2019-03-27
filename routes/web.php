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

Route::get('/', function () {
    return view('home');
});

Route::get('/headhunter', function () {
    return view('headhunter');
});

Route::get('/candidate', function () {
    return view('candidate');
});

Route::get('/recruit', function () {
    return view('recruit');
});

Route::get('headhunter', 'headhunterviewController@index');
Route::get('candidate', 'candidateViewController@index');
Route::get('recruit', 'recruitController@index');

Route::post('recruitAdd', 'recruitController@store');
Route::post('headhunterAdd', 'headhunterviewController@store');
Route::post('candidateAdd', 'candidateViewController@store');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
