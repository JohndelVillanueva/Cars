<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cars/',[CarsController::class, 'index']);
Route::get('cars/form',[CarsController::class, 'create']);
// Route::get('cars',[CarsController::class,'index']);
Route::get('cars/{id}', [CarsController::class,'show']);
Route::get('cars/{id}/category/{categoryId}', [CarsController::class,'getProductByIdAndCategory']);
Route::post('cars', [CarsController::class,'store']);



