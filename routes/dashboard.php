<?php

use App\Http\Controllers\ReviewsController;

use App\Http\Controllers\MainPageController;

/*
 * AlexKhor
 */
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

/*
 * AlexKhor
 */
Route::get('/dashboard', function () {
    return view('admin.main');
})->middleware(['auth'])->name('dashboard1');

Route::get('/dashboard/users', function () {
    return view('admin.users');
})->middleware(['auth'])->name('dashboard2');

//Роуты управления товарами
Route::get('/dashboard/product/',
    [ProductController::class, 'show']
)->middleware(['auth'])->name('dashboard3');

Route::get('/dashboard/product/{id}',
    [ProductController::class, 'show']
)->middleware(['auth'])->name('dashboard5');

Route::get('/dashboard/addproduct/',
    [ProductController::class, 'addNew']
)->middleware(['auth'])->name('dashboard4');

Route::post('/dashboard/addproduct/save',
    [ProductController::class, 'addSave']
)->middleware(['auth'])->name('dashboard41');

Route::post('/dashboard/product/{id}/save',
    [ProductController::class, 'editStore']
)->middleware(['auth'])->name('dashboard6');

Route::post('/dashboard/product/{id}/delete',
    [ProductController::class, 'delete']
)->middleware(['auth'])->name('dashboard7');

//Роуты для управления категориями
Route::get('/dashboard/category/',
    [CategoryController::class, 'show']
)->middleware(['auth'])->name('dashboard3');

Route::get('/dashboard/category/{id}',
    [CategoryController::class, 'edit']
)->middleware(['auth'])->name('dashboard5');

Route::post('/dashboard/category/{id}/save',
    [CategoryController::class, 'editSaveCategory']
)->middleware(['auth'])->name('dashboard5');

Route::get('/dashboard/addcategory/',
    [CategoryController::class, 'addCategory']
)->middleware(['auth'])->name('dashboard4');

Route::post('/dashboard/addcategory/save',
    [CategoryController::class, 'saveAddCategory']
)->middleware(['auth'])->name('dashboard41');

Route::post('/dashboard/category/{id}/delete',
    [CategoryController::class, 'delete']
)->middleware(['auth'])->name('dashboard7');

//Роуты для управления заказами
Route::get('/dashboard/order/',
    [OrderController::class, 'showAll']
)->middleware(['auth'])->name('dashboard3');

Route::get('/dashboard/order/{id}',
    [OrderController::class, 'editOrder']
)->middleware(['auth'])->name('dashboard5');

Route::post('/dashboard/order/{id}/save',
    [OrderController::class, 'saveOrder']
)->middleware(['auth'])->name('dashboard41');

Route::post('/dashboard/order/{id}/delete',
    [OrderController::class, 'delete']
)->middleware(['auth'])->name('dashboard7');



