<?php

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

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
   Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
   Route::resource('category', \App\Http\Controllers\Admin\CategoriesController::class);
   Route::resource('product', \App\Http\Controllers\Admin\ProductsController::class);
   Route::get('account/{id}/detail', [\App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile.index');
   Route::patch('account/{id}/update', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () { return view('landing.home'); });
    Route::get('/about', function () { return view('landing.about'); });
    Route::get('/products', function () { return view('landing.products'); });
    Route::get('/store', function () { return view('landing.store'); });
});
