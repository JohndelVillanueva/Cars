<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoriesController;
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

Route::get('cars/form',[CarsController::class, 'create']);
Route::get('cars/',[CarsController::class, 'index']);
// Route::get('cars',[CarsController::class,'index']);
Route::get('cars/{id}', [CarsController::class,'show']);
// Route::get('cars/{id}/category/{categoryId}', [CarsController::class,'getProductByIdAndCategory']);
Route::post('cars', [CarsController::class,'store']);

Route::get('brands/form', [BrandsController::class,'create']);
Route::get('brands/', [BrandsController::class, 'index']);
Route::get('brands/{id}', [BrandsController::class,'show']);
Route::post('brands', [BrandsController::class,'store']);

Route::get('categories/form', [CategoriesController::class,'create']);
Route::get('categories/', [CategoriesController::class,'index']);
Route::post('categories', [CategoriesController::class,'store']);
Route::get('categories/{id}', [CategoriesController::class,'show']);
