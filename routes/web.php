<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Admin\AdminArticlesController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminTagsController;
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
    return view('articles.index');
})->name('home');

Route::get('articles', [ArticlesController::class, 'index'])->name('articles.index');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('tags', AdminTagsController::class);
    Route::resource('articles', AdminArticlesController::class);
});

require __DIR__.'/auth.php';
