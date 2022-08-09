<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Dashboard\HomeDashboardController;
use App\Http\Controllers\Dashboard\CategoryDashboardController;

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
|Роуты панели управления
 */

Route::redirect('/admin', '/login');

Route::get('/', function () {
    return view('layouts.layout');
});



Route::get('/dashboard', [HomeDashboardController::class, 'show'])
        ->middleware(['auth'])
        ->name('dashboard');

Route::get('/dashboard/category', [CategoryDashboardController::class, 'show'])
        ->middleware(['auth'])
        ->name('dashboard-category');

Route::get('/dashboard/product', [ProductDashboardController::class, 'show-all'])
        ->middleware(['auth'])
        ->name('dashboard-product');

Route::get('/dashboard/product/{slug}', [ProductDashboardController::class, 'show-one'])
        ->middleware(['auth'])
        ->name('dashboard-product-slug');

Route::get('/dashboard/review', [ReviewDashboardController::class, 'show-all'])
        ->middleware(['auth'])
        ->name('dashboard-review');



/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

require __DIR__.'/auth.php';


/* Роуты пользовательской части сайта */
/*
Route::get('/', UserController::class . '@show');

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

