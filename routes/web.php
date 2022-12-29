<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\ReportController;
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

Route::controller(LetterController::class)
    ->group(function () {
        letterRoutes();
    });

Route::controller(CategoryController::class)
    ->group(function () {
        categoryRoutes();
    });

Route::controller(WordController::class)
    ->group(function () {
        wordRoutes();
    });

Route::controller(ArticleController::class)
    ->group(function () {
        articleRoutes();
    });


Route::controller(ReportController::class)
    ->group(function () {
        reportRoutes();
    });


Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/register-form', function () {
    return view('auth.register');
})->name('register form');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/temptemptemp', [\App\Http\Controllers\RoleController::class, 'temp']);

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
    Route::get('word-create', 'createForm')
        ->name('word.add-get');

    Route::post('word-create', 'create')
        ->name('word.add');

    Route::get('word-delete/{id}', 'delete')
        ->name('word.delete');

    $prefix = '/category/{category}';

    Route::get($prefix, 'index')
        ->name('word.index');

    Route::get($prefix . '/test', 'generateTest')
        ->name('word.test');

    Route::get($prefix . '/autocomplete-search', 'autocompleteSearch')
        ->name('word.autocomplete-search');

    Route::get($prefix . '/{id}', 'getLearningWord')
        ->name('word.learn');
}


function reportRoutes()
{
    $prefix = '/report';

    Route::get($prefix, 'index')
        ->name('report');

    Route::post($prefix, 'create')
        ->name('report.add');

    Route::get($prefix . '/handle/{report}', 'handleReport')
        ->name('report.handle');

    Route::get($prefix . '/view/{report}', 'viewReport')
        ->name('report.view');

}


function articleRoutes()
{
    $prefix = '/article';

    Route::get($prefix . '/article-create', 'getCreateFrom')
        ->name('article.add-form');

    Route::get($prefix, 'index')
        ->name('article.index');

    Route::get($prefix . '/autocomplete-search', 'autocompleteSearch')
        ->name('article.autocomplete-search');

    Route::get($prefix . '/{article}', 'getArticle')
        ->name('article.single_article');

    Route::post($prefix . '/{article}', 'validateArticle')
        ->name('article.single_article_validate');

    Route::post($prefix, 'create')
        ->name('article.add');

    Route::get($prefix . '/del/{id}', 'delete')
        ->name('article.delete');

}

function letterRoutes()
{

    $prefix = '/letter';

    Route::get($prefix, 'index2')
        ->name('letter.list');

    Route::get($prefix . '/del/{id}', 'delete')
        ->name('letter.delete');

    $prefix = '/letter/{letter}';
    Route::get($prefix, 'index')
        ->name('letter.index');

    Route::post($prefix, 'create')
        ->name('letter.add');

}
