<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/products');
});

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products/add', [ProductController::class, 'add']);
Route::get('/products/edit/{product}', [ProductController::class, 'editPageIndex']);
Route::put('/products/edit/{product}', [ProductController::class, 'edit']);
Route::delete('/products/{product}', [ProductController::class, 'delete']);
