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

Route::get('/', function () {
    return view('HomePage');
})->name('accueil');

// adding authors
Route::get('/admin/authors/add', [App\Http\Controllers\AuthorController::class, 'add'])->name('add.authors');
Route::post('/admin/authors/add', [App\Http\Controllers\AuthorController::class, 'create'])->name('authors.store');

// editing authors
Route::get('/admin/authors/edit/{id}', [App\Http\Controllers\AuthorController::class, 'edit'])->name('edit.authors');
Route::put('/admin/authors/edit/{id}', [App\Http\Controllers\AuthorController::class, 'update'])->name('authors.update');

// list authors
Route::get('/admin/authors', [App\Http\Controllers\AuthorController::class, 'list'])->name('list.authors');

// deleting auteurs
Route::delete('/admin/authors/delete/{id}', [App\Http\Controllers\AuthorController::class, 'delete'])->name('delete.authors');


// adding categories
Route::get('/admin/categories/add', [App\Http\Controllers\CategoryController::class, 'add'])->name('add.categories');
Route::post('/admin/categories/add', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');

// editing authors
Route::get('/admin/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit.categories');
Route::put('/admin/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');

// list categories
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'list'])->name('list.categories');

// deleting categories
Route::delete('/admin/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('delete.categories');


// list books
Route::get('/books', [App\Http\Controllers\BookController::class, 'list'])->name('list.books');

// adding books
Route::get('/admin/books/add', [App\Http\Controllers\BookController::class, 'add'])->name('add.books');
Route::post('/admin/books/add', [App\Http\Controllers\BookController::class, 'store'])->name('books.store');


// deleting books
Route::delete('/admin/books/delete/{id}', [App\Http\Controllers\BookController::class, 'delete'])->name('delete.books');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['admin'])->group(function(){
    // editing books
    Route::get('/admin/books/edit/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('edit.books');
    Route::put('/admin/books/edit/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('books.update');


});
