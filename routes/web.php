<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
