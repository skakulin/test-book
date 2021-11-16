<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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
    return view('pages.main');
})->name('main');

Route::match(['get', 'post'], '/add-author', [AuthorController::class, "addAuthor"])->name('add-author');
Route::match(['get', 'post'], '/add-book', [BookController::class, "addBook"])->name('add-book');

Route::match(['get', 'post'], '/edit-book/{id}', [BookController::class, "editBook"])->name('editBook');
Route::match(['get', 'post'], '/edit-author/{id}', [AuthorController::class, "editAuthor"])->name('editAuthor');

Route::get('/delete-book/{id}', [BookController::class, "deleteBook"])->name('deleteBook');
Route::get('/delete-author/{id}', [AuthorController::class, "deleteAuthor"])->name('deleteAuthor');

Route::get('/authors', [AuthorController::class, "authors"])->name('authors');
Route::get('/books', [BookController::class, "books"])->name('books');

Route::match(['get', 'post'], '/add-book-author', [AuthorController::class, "addBookAuthor"])->name('add-book-author');
