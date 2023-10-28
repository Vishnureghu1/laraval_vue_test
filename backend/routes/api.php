<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ReverseWordController;
use App\Http\Controllers\DigitsController;




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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('generate-numbers', [NumberController::class, 'generateNumbers']);

Route::post('user-string', [ReverseWordController::class, 'reverseWord']);
Route::post('combination', [DigitsController::class, 'digitsCombination']);




