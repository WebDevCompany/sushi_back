<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewsController;
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

Route::get('/', UserController::class . '@show');
/*
Route::get('/', function () {
    return view('test');
});
*/

Route::get('/', function () {
    return view('layouts.layout');
});

Route::get('/name_category', function () {
    return "Категории";
});

Route::get('/name_product', function () {
    return "Продукт";
});

Route::get('/reviews/{id}', ReviewsController::class . '@show');


Route::get('/order', function () {
    return "Оформление заказа";
});

Route::get('/order1', function () {
    return "Оформление заказа1";
});

Route::get('/order2', function () {
    return "Оформление заказа2";
});

