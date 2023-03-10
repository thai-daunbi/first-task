<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sampleController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();


// });
Route::get('/getUser/{id}', 'sampleController@getUser');


Route::prefix('api')->name('api.')->group(function () {
    Route::get('/getUser/{id}', function ($id) {
        // Route assigned name "api.getUser"...
    })->name('getUser');
});
