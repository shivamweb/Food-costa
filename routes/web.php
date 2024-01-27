<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\TableController;

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
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::post('/add-fooditem', [FoodItemController::class, 'addfooditem'])->name('addfooditem');
Route::get('/viewfooditem', [FoodItemController::class, 'fetchfooditem'])->name('viewfooditem');


Route::post('/add-product', [ProductController::class, 'addproduct'])->name('addproduct');
Route::get('/viewproduct', [ProductController::class, 'viewproduct'])->name('viewproduct');
Route::post('/add-category', [CategoryController::class, 'addcategory'])->name('addcategory');
Route::get('/viewcategory', [CategoryController::class, 'viewcategory'])->name('viewcategory');

Route::post('/add-booking', [BookingController::class, 'addbooking'])->name('addbooking');
Route::get('/viewbooking', [BookingController::class, 'viewbooking'])->name('viewbooking');


Route::post('/add-table', [TableController::class, 'addtable'])->name('addtable');
Route::get('/viewtable', [TableController::class, 'viewtable'])->name('viewtable');
Route::get('/', [TableController::class, 'listTable'])->name('table');


Route::get('/term-condition', function () {
    return view('term-condition');
});
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('transaction', function () {
    return view('transaction');
});
Route::get('order-status', function () {
    return view('order-status');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/setting', function () {
    return view('setting');
});