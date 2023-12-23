<?php

use Illuminate\Support\Facades\Auth;
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
    return view('front.home');
})->name('index');
Route::get('/store', function () {
    return view('front.store');
});
Route::get('/news', function () {
    return view('front.news');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/about', function () {
    return view('front.clean');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// category Routes
Route::get('/dashboard/categories', [App\Http\Controllers\Dashboard\CategoryController::class, 'index'])->name('categories.index');
Route::post('/dashboard/categories', [App\Http\Controllers\Dashboard\CategoryController::class, 'store'])->name('categories.store');
Route::get('/dashboard/categories/edit/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/dashboard/categories/update/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'update'])->name('categories.update');
Route::get('/dashboard/categories/delete/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'destroy'])->name('categories.destroy');


// Blog Routes
Route::get('/dashboard/posts', [App\Http\Controllers\Dashboard\BlogController::class, 'index'])->name('posts.index');
Route::get('/dashboard/addPost', [App\Http\Controllers\Dashboard\BlogController::class, 'create'])->name('posts.create');
Route::post('/dashboard/posts', [App\Http\Controllers\Dashboard\BlogController::class, 'store'])->name('posts.store');
Route::get('/dashboard/posts/edit/{id}', [App\Http\Controllers\Dashboard\BlogController::class, 'edit'])->name('posts.edit');
Route::post('/dashboard/posts/update/{id}', [App\Http\Controllers\Dashboard\BlogController::class, 'update'])->name('posts.update');
Route::get('/dashboard/poposts/{id}', [App\Http\Controllers\Dashboard\BlogController::class, 'destroy'])->name('posts.destroy');
