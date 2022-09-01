<?php

/*
 * AlexShvet
 */
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ProductsPageController;
use App\Http\Controllers\MainPageController;

/*
 * AlexKhor
 */
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



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


Route::get('/', [MainPageController::class, 'show']);
Route::get('/products', [ProductsPageController::class, 'show']);


Route::get('/dashboard', function () {
    return view('admin.main');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/users', function () {
    return view('admin.users');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/product/{id?}',
    [ProductController::class, 'show']
)->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

Route::get('/reviews', [ReviewsController::class, 'show']);
Route::get('/review/{id}', [ReviewsController::class, 'showRev']);
