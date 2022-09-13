<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group(['middleware'=>'auth:sanctum'],function()
{
    Route::post('logout',[AuthController::class,'logout']);
    Route::get('logged',[AuthController::class,'logged_user']);
    Route::post('changepassword',[AuthController::class,'changepassword']);
    
});
Route::post('create',[AuthController::class,'create']);
Route::post('login',[AuthController::class,'login']);

