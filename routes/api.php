<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\DatosDriversController;
use Vendor\laravel\src\Http\Controllers\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/users',[ApiController::class, 'users']);
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
->middleware(['guest'])
->name('login');

Route::get('/drivers', [DatosDriversController::class, 'getListaDeDatos']);
Route::get('/drivers/{id}', [DatosDriversController::class, 'edit']);

Route::post('/drivers', [DatosDriversController::class, 'store']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
