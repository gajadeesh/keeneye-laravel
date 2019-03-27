<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/candidate/create','CandidateController@create');

Route::get('/candidate','CandidateController@show');

Route::get('/candidate/{id}','CandidateController@showbyid');

Route::post('/headhunter/create','HeadhunterController@create');

Route::get('/headhunter','HeadhunterController@show');

Route::get('/headhunter/{id}','HeadhunterController@showbyid');
