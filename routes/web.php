<?php

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

Route::get('/', function () {
<<<<<<< HEAD
    return view('layouts.layout');
=======
    return view('Vlad.index');
>>>>>>> b649998a7df73fdf5463fc630abd3c37f44007e5
});

Route::get('/dashboard', function () {
    return view('admin.main');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/reviews', [ReviewsController::class, 'show']);
Route::get('/review/{id}', [ReviewsController::class, 'showRev']);

//Route::get('/reviews/{id}', ReviewsController::class . '@show');