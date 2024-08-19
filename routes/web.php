<?php

use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('index');
// });



################## Products Route ###################
// returns the home page with all products
Route::get('/', ProductController::class . '@index')->name('products.index');
// returns the form for adding a product
Route::get('/products/create', ProductController::class . '@create')->name('products.create');
// adds a product to the database
Route::post('/products', ProductController::class . '@store')->name('products.store');
// returns a page that shows a full product
Route::get('/products/{product}', ProductController::class . '@show')->name('products.show');
// returns the form for editing a product
Route::get('/products/{product}/edit', ProductController::class . '@edit')->name('products.edit');
// updates a product
Route::put('/products/{product}', ProductController::class . '@update')->name('products.update');
// deletes a product
Route::delete('/products/{product}', ProductController::class . '@destroy')->name('products.destroy');



################## Categories Route ###################
// returns the home page with all categories
Route::get('/categories', CategoryController::class . '@index')->name('categories.index');
// returns the form for adding a category
Route::get('/categories/create', CategoryController::class . '@create')->name('categories.create');
// adds a category to the database
Route::post('/categories', CategoryController::class . '@store')->name('categories.store');
// returns a page that shows a full category
Route::get('/categories/{category}', CategoryController::class . '@show')->name('categories.show');
// returns the form for editing a category
Route::get('/categories/{category}/edit', CategoryController::class . '@edit')->name('categories.edit');
// updates a category
Route::put('/categories/{category}', CategoryController::class . '@update')->name('categories.update');
// deletes a category
Route::delete('/categories/{category}', CategoryController::class . '@destroy')->name('categories.destroy');
