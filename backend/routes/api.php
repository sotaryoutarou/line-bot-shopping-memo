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

// LINE webhook revieve
Route::post('/line/webhook', 'App\Http\Controllers\LineMessengerController@webhook')->name('line.webhook');

// LINE message send
Route::get('/line/message', 'App\Http\Controllers\LineMessengerController@message');