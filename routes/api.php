<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\LanguageController;
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

Route::get('/api/v1/category',[HomeController::class,'category_list']);
Route::get('/api/v1/subsubcategory',[HomeController::class,'subsubcategory_list']);
Route::get('/api/v1/subcategory',[HomeController::class,'subcategory_list']);
Route::get('/api/v1/home/slider',[HomeController::class,'slider_list']);
Route::get('/api/v1/frontend/new-product',[HomeController::class,'new_product']);
Route::get('/api/v1/frontend/hotdeal-product',[HomeController::class,'hotdeal']);
Route::get('/api/v1/frontend/featured-products',[HomeController::class,'featured_product']);

Route::get('/api/v1/frontend/brand',[HomeController::class,'brand_list']);



Route::get('/api/v1/frontend/product-view/{slug}',[HomeController::class,'product_view']);
Route::get('/api/v1/frontend/product-by-category/{id}',[HomeController::class,'product_by_category']);
Route::get('/api/v1/frontend/product-by-subcategory/{id}',[HomeController::class,'product_by_subcategory']);
Route::get('/api/v1/frontend/product-by-subsubcategory/{id}',[HomeController::class,'product_by_subsubcategory']);
Route::get('/api/v1/frontend/product-by-brand/{id}',[HomeController::class,'product_by_brand']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
