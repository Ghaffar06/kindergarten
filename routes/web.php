<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/category',
    [App\Http\Controllers\CategoryController::class, 'index']
)->name('category');

Route::post('/category/add',
    [App\Http\Controllers\CategoryController::class, 'add']
)->name('category.add');

Route::get('/category/delete/{id}',
    [App\Http\Controllers\CategoryController::class, 'delete']
)->name('category.delete');

Route::get('/', function () {
    return view('word_category');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
