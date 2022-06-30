<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
$user = Auth::user();
Route::get('/user', function (Request $request) {
   return Auth::user();
});
// Route::middleware(['auth:api'])->get('/user',function (Request $request) {
//     return Auth::user();
// });
Route::middleware('auth:sanctum')->get('/athenticated', function () {
    return true;
});
//Auth::routes();
//Route::post('register', [RegisterController::class]');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
//Route::delete('users/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
Route::get('/users',[App\Http\Controllers\Auth\UserController::class, 'getUsers']);
Route::get('user/{id}',[App\Http\Controllers\Auth\UserController::class, 'getUserById']);
Route::put('user/{id}',[App\Http\Controllers\Auth\UserController::class, 'updateUser']);
Route::delete('user/{id}',[App\Http\Controllers\Auth\UserController::class, 'deleteUser']);