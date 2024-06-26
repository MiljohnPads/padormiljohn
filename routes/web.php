<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function() { return view('pages.home');});
Route::get('/about', function() { return view('pages.about');});
Route::get('/product', function() { return view('pages.products');});
Route::get('/contact', function() { return view('pages.contact');});

Route::get('/open', [ProductController::class, 'open']);

Route::post('/create-product', [ProductController::class, 'store'])->name('create.product');

Route::get('/close-button', [ProductController::class, 'close'])->name('close.button');

Route::get('/message', [ProductController::class, 'message'])->name('message');

Route::get('/error', [ProductController::class, 'error'])->name('error');

