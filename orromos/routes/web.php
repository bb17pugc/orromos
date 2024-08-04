<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/news', [App\Http\Controllers\PagesController::class, 'news'])->name('news');
Route::get('/web-showroom', [App\Http\Controllers\PagesController::class, 'webshowroom'])->name('web-showroom');
Route::get('/new-blog', [App\Http\Controllers\BlogController::class, 'NewBlog'])->name('new-blog');
Route::get('/save-blog', [App\Http\Controllers\BlogController::class, 'SaveBlog'])->name('save-blog');


