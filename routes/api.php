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

Route::post('/payReminder', 'App\Http\Controllers\MessageController@payReminder');

Route::prefix('contacts')->group(function () {
    Route::get('/', 'App\Http\Controllers\ContactController@index');

    Route::get('/{id}', 'App\Http\Controllers\ContactController@show');

    Route::post('/', 'App\Http\Controllers\ContactController@create');

    Route::patch('/{id}', 'App\Http\Controllers\ContactController@update');

    Route::delete('/{id}', 'App\Http\Controllers\ContactController@delete');
});
