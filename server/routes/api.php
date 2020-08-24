<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::namespace('Api')->group(function () {
    // Route::get('/posts', 'PostController@index');
    Route::get('/movie', 'MovieController@index');
    
    Route::get('/movie/{slug}', 'MovieController@single');
    Route::get('/tvshow', 'TvshowController@index');
    Route::get('/categories', 'CategoryController@index');
    Route::get('/categorymovies', 'CategoryController@movies');
    Route::get('/categorytvshows', 'CategoryController@tvshows');
    Route::get('/tvshow/{slug}', 'TvshowController@single');
    Route::get('/tvshow/episode/{episode_slug}', 'TvshowController@singleepisode');
 
    
});