<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use Illuminate\Http\Resource;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FeaturesController;


Route::resource('/' , ProductsController::class);
// Route::resource('new' , FeaturesController::class);
Route::get('products' , [ProductsController::class , 'productspage']);

