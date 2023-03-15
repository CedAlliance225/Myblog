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
    return view('index');
});
Route::get('/All', function () {
    return view('Auteur.All');
});

Route::resource('articles', ArticlesController::class);

Route::get('/AddArticles', function () {
    return view('Auteur.AjoutArticle');})->middleware(['auth'])->name('dashboard');
Route::post('/articles', 'App\Http\Controllers\ArticleController@store')->name('articles.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
