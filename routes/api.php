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

// List Article
Route::get('articles','ArticleController@index');
// Single Article
Route::get('article/{id}','ArticleController@show');
// Create a Article
Route::post('article','ArticleController@store');
// update a Article
Route::put('articles','ArticleController@store');
// Delete Articles
Route::delete('articles','ArticleController@destroy');

