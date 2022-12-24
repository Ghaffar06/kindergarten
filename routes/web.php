<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WordController;
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

Route::controller(CategoryController::class)
    ->group(function () {
        categoryRoutes();
    });

Route::controller(WordController::class)
    ->group(function () {
        wordRoutes();
    });

Route::get('/mullham/category', function () {
    return view('word_category');
})->name('word_category');

Route::get('/mullham/words', function () {
    return view('words');
})->name('words');


Route::get('/mullham', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


function categoryRoutes()
{
    $prefix = '/category';

    Route::get($prefix, 'index')
        ->name('category.index');

    Route::post($prefix, 'create')
        ->name('category.add');

    Route::get($prefix . '/del/{id}', 'delete')
        ->name('category.delete');

    Route::get($prefix . '/autocomplete-search', 'autocompleteSearch')
        ->name('category.autocomplete-search');
}


function wordRoutes()
{
    $prefix = '/word';

    Route::get($prefix, 'index')
        ->name('word.index');

    Route::post($prefix, 'create')
        ->name('word.add');

    Route::get($prefix . '/del/{id}', 'delete')
        ->name('word.delete');

    Route::get($prefix . '/autocomplete-search', 'autocompleteSearch')
        ->name('word.autocomplete-search');
}

