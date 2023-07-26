<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductLinkController;
use App\Http\Controllers\PixelController;
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
    return view('welcome');
});

Route::post('store', [PostController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('storeproductlink', [ProductLinkController::class, 'storeproductlink']);
Route::get('/productbyid', [ProductLinkController::class, 'showproductlinkbyid']);
Route::get('/deleteproductbyid', [ProductLinkController::class, 'deleteproductlinkbyid']);
Route::post('/updatepixel', [PixelController::class, 'updatepixel']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
