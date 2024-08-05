<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/waiting-room/{id}', [LandingPageController::class, 'waitingRoom'])->name('waiting-room');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoryController::class);
Route::resource('mejas', MejaController::class);
Route::resource('menu-items', MenuItemController::class);
Route::resource('orders', OrderController::class);
Route::get('orders/{order}/print', [OrderController::class, 'print'])->name('orders.print');
Route::put('orders/update-order-items/{orderItem}', [OrderController::class, 'updateOrderItem'])->name('orders.update-order-items');
Route::delete('orders/delete-order-item/{orderItem}', [OrderController::class, 'deleteOrderItem'])->name('orders.delete-order-item');
Route::resource('promotions', PromotionController::class);
Route::resource('reviews', ReviewController::class);