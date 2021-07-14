<?php
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubSubController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;


Route::prefix('api/v1')->group(function (){
    Route::get('/brand',[BrandController::class,'index']);
    Route::post('/brand/store',[BrandController::class,'store']);
    Route::delete('/brand/delete/{slug}',[BrandController::class,'delete']);
    Route::get('/brand/edit/{slug}',[BrandController::class,'edit']);
    Route::put('/brand/update/{slug}',[BrandController::class,'update']);

    Route::get('/category',[CategoryController::class,'category']);
    Route::post('/category/store',[CategoryController::class,'store']);
    Route::get('/category/edit/{slug}',[CategoryController::class,'edit']);
    Route::put('/category/update/{slug}',[CategoryController::class,'update']);
    Route::delete('/category/delete/{slug}',[CategoryController::class,'delete']);

    Route::get('/subcategory',[SubCategoryController::class,'subcategory']);
    Route::post('/subcategory/store',[SubCategoryController::class,'store']);
    Route::get('/subcategory/edit/{slug}',[SubCategoryController::class,'edit']);
    Route::put('/subcategory/update/{slug}',[SubCategoryController::class,'update']);
    Route::delete('/subcategory/delete/{slug}',[SubCategoryController::class,'delete']);
    Route::get('/subcategory/getById/{id}',[SubCategoryController::class,'getById']);

    Route::get('/subsubcategory',[SubSubController::class,'subsubcategory']);
    Route::post('/subsubcategory/store',[SubSubController::class,'store']);
    Route::get('/subsubcategory/edit/{slug}',[SubSubController::class,'edit']);
    Route::put('/subsubcategory/update/{id}',[SubSubController::class,'update']);
    Route::delete('/subsubcategory/delete/{slug}',[SubSubController::class,'delete']);
    Route::get('/subsubcategory/getByid/{id}',[SubSubController::class,'getByid']);

    Route::post('/product/store',[ProductController::class,'store']);

    Route::get('slider/index',[SliderController::class,'index']);
    Route::post('slider/store',[SliderController::class,'store']);
});

