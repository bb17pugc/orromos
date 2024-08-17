<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::post('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/news', [App\Http\Controllers\PagesController::class, 'news'])->name('news');
Route::get('/web-showroom', [App\Http\Controllers\PagesController::class, 'webshowroom'])->name('web-showroom');
Route::get('/new-blog', [App\Http\Controllers\BlogController::class, 'NewBlog'])->name('new-blog');
Route::post('/save-blog', [App\Http\Controllers\BlogController::class, 'SaveBlog'])->name('save-blog');
Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'Blog'])->name('blogs');
Route::get('/view-data', [App\Http\Controllers\BlogController::class, 'viewData'])->name('view-data');
Route::get('/webseite-erstellen-lassen', [App\Http\Controllers\PagesController::class, 'webshowroom'])->name('webseite-erstellen-lassen');
Route::get('/impressum', [App\Http\Controllers\PagesController::class, 'impressum'])->name('impressum');




