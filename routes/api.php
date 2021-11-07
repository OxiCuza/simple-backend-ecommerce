<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'v1'], function (){
    # Category
    Route::get('categories', [\App\Http\Controllers\API\AllController::class, 'categories'])->name('api.categories');

    # Product
    Route::get('products', [\App\Http\Controllers\API\AllController::class, 'products'])->name('api.products');
    Route::get('product/{id}', [\App\Http\Controllers\API\AllController::class, 'detailProduct'])->name('api.products.detail');
    Route::get('category/{id}/products', [\App\Http\Controllers\API\AllController::class, 'productsByCategory'])->name('api.categories.products');

});
