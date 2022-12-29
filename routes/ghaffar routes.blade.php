<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WordController;
use App\Models\Report;
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


Route::controller(ReportController::class)
    ->group(function () {
        reportRoutes();
    });

Route::get('/mullham/category', function () {
    return view('word_category');
})->name('word_category');

Route::get('/mullham/words', function () {
    return view('words');
})->name('words');

Route::get('/mullham/single_word', function () {
    return view('single_word');
})->name('single_word');

Route::get('/mullham/text', function () {
    return view('single_article');
})->name('text');

Route::get('/mullham', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('word_category');
})->name('index');


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


function reportRoutes()
{
    $prefix = '/report';

    Route::get($prefix, 'index')
        ->name('report.index');

    Route::post($prefix, 'create')
        ->name('report.add');

    Route::get($prefix . '/handle/{id}', 'handleReport')
        ->name('report.handle');
    Route::get($prefix . '/view/{id}', 'viewReport')
        ->name('report.view');


}
