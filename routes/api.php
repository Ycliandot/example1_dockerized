<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

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

Route::prefix('v1')->middleware(['throttle:api'])->group(function () {
    Route::get('register', [Api\AuthController::class, 'register']);
    Route::get('login', [Api\AuthController::class, 'login']);
});

Route::group(['prefix' => 'v1', 'middleware' => [/*'auth:sanctum',*/ 'throttle:api']], function() {
    Route::apiResource('employees', Api\EmployeeController::class);
    Route::get('logout', [Api\AuthController::class, 'logout']);
});
