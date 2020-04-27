<?php

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

Route::get('/', function () {
    return redirect('/articles');
});

Route::get('/about', function () {
    $articles = App\Article::latest()->get();
    return view('about', compact('articles'));
});

Route::get('articles/create', 'ArticlesController@create');
Route::post('articles/store', 'ArticlesController@store');
Route::get('articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('articles/{article}/edit', 'ArticlesController@edit');
Route::get('articles', 'ArticlesController@index')->name('articles.index');
Route::put('articles/{article}', 'ArticlesController@update');
