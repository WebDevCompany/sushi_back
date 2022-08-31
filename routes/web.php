<?php

use App\Http\Controllers\ReviewsController;

use App\Http\Controllers\MainPageController;

/*
 * AlexKhor
 */
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



//Роуты авторизации. Установлены автоматически
require __DIR__.'/auth.php';
//Роуты админпанели. Установил хаа 27082022
require __DIR__.'/dashboard.php';

Route::get('/reviews', [ReviewsController::class, 'show']);
Route::get('/review/{id}', [ReviewsController::class, 'showRev']);
