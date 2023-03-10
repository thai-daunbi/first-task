<?php

use Illuminate\Support\Facades\Route;


/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return app()->version();
// });


Route::prefix('api')->name('api.')->group(function () {
    Route::get('getUser/{id}', 'sampleController@showGet')->where('id', '[0-9]+');
    Route::post('getUser', 'sampleController@showPost');
});

Route::domain('{subdomain}.example.com')->group(function () {
    Route::prefix('')->group(function () {
        Route::get('getUser/{id}', 'sampleController@showGet')->where('id', '[0-9]+');
        Route::post('getUser', 'sampleController@showPost');
    });
});
