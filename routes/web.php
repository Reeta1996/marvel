<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\categoryController;


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
/*
Route::get('/pp', function () {
    return view('include.index');
});   */



// dashboard Routes
Route::get('/', dashboardController::class .'@index')->name('dashboard.index');
Route::get('/details/{id}', dashboardController::class .'@details')->name('dashboard.details');
Route::get('/orders/create/(product_id)', ordersController::class .'@create')->name('orders.create');

//login
Route::get('/login', UserController::class .'@login')->name('user.login');
Route::post('/dologin', UserController::class .'@dologin')->name('user.dologin');
Route::get('/logout', UserController::class .'@logout')->name('user.logout');

//product
Route::get('/product/index', productController::class .'@index')->name('product.index');
Route::get('/product/add', productController::class .'@add')->name('product.add');
Route::post('/product/create', productController::class .'@create')->name('product.create');
Route::get('/product/{id}/edit', productController::class .'@edit')->name('product.edit');
Route::put('/product/update/{id}/', productController::class .'@update')->name('product.update');
Route::delete('/product/{id}', productController::class .'@destroy')->name('product.destroy');

//category
Route::get('/category', categoryController::class .'@index')->name('category.index');
Route::get('/category/add', categoryController::class .'@add')->name('category.add');
Route::post('/category/store', categoryController::class .'@store')->name('category.store');
Route::get('/category/{id}/edit', categoryController::class .'@edit')->name('category.edit');
Route::put('/category/update/{id}', categoryController::class .'@update')->name('category.update');
Route::put('/category/status_update/{id}', categoryController::class .'@status_update')->name('category.status_update');
Route::delete('/category/{id}', categoryController::class .'@destroy')->name('category.destroy');


Route::get('/orders', ordersController::class .'@index')->name('orders.index');







