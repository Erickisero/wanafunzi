<?php

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
    return view('welcome');
});

Auth::routes();


//Home controllers

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');

Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('home.faq');

Route::get('/food', [App\Http\Controllers\HomeController::class, 'food'])->name('home.food');

Route::get('/gallary', [App\Http\Controllers\HomeController::class, 'gallary'])->name('home.gallary');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('home.blog');
Route::get('/location', [App\Http\Controllers\HomeController::class, 'location'])->name('home.location');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('home.menu');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('home.order');




//Admin controllers 

Route::get('/admin/index', [App\Http\Controllers\adminController::class, 'index'])->name('admin.index');

//category controllers 

Route::post('/category', [App\Http\Controllers\categoryController::class, 'chooseCategory'])->name('category');

//order controllers
Route::get('/category/order/create', [App\Http\Controllers\orderController::class, 'create'])->name('order.create');
Route::get('/category/order/index', [App\Http\Controllers\orderController::class, 'index'])->name('order.index');
Route::post('/category/order/create', [App\Http\Controllers\orderController::class, 'store'])->name('order.store');
Route::get('/category/order/{id}/edit', [App\Http\Controllers\orderController::class, 'edit'])->name('order.edit');
Route::put('/category/order/{id}/update', [App\Http\Controllers\orderController::class, 'update'])->name('order.update');
Route::delete('/category/order/{id}/delete', [App\Http\Controllers\orderController::class, 'destroy'])->name('order.destroy');