<?php

use App\Http\Controllers\ReviewsController;

use App\Http\Controllers\MainPageController;

/*
 * AlexKhor
 */
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ProductController;



use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.main');
})->middleware(['auth'])->name('dashboard1');

Route::get('/dashboard/users', function () {
    return view('admin.users');
})->middleware(['auth'])->name('dashboard2');

Route::get('/dashboard/product/',
    [ProductController::class, 'show']
)->middleware(['auth'])->name('dashboard3');

Route::get('/dashboard/addproduct/',
    [ProductController::class, 'add']
)->middleware(['auth'])->name('dashboard4');

Route::post('/dashboard/addproduct/save',
    [ProductController::class, 'addSave']
)->middleware(['auth'])->name('dashboard41');

Route::get('/dashboard/product/{id}',
    [ProductController::class, 'show']
)->middleware(['auth'])->name('dashboard5');

Route::post('/dashboard/product/{id}/save',
    [ProductController::class, 'store']
)->middleware(['auth'])->name('dashboard6');

Route::post('/dashboard/product/{id}/delete',
    [ProductController::class, 'delete']
)->middleware(['auth'])->name('dashboard7');

/*
 * Загрузка изображений

Route::post('/dashboard/product/{id}/load',
    [ProductController::class, 'load']
)->middleware(['auth'])->name('dashboard');
 *
 */

