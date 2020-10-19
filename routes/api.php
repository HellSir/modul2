<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth;
use \App\Http\Controllers\AirportController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FlightController;
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

Route::post('/register', [Auth::class,'register']);
Route::post('/login', [Auth::class, 'login']);
Route::get('/flight',[FlightController::class,'search']);
Route::get('/user',[Auth::class,'getInfo'])->middleware('auth.api');
Route::get('/airport',[AirportController::class,'search']);
Route::get('/booking/{code}',[BookingController::class,'getOne']);
//Route::get('/user/booking',[UserController::class,'getBookings'])->middleware('auth.api');
