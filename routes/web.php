<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes(['register' => false]);

Route::resource('products', 'ProductController');
Route::resource('product-galleries', 'ProductGalleryController');   
Route::resource('transactions', 'TransactionController');

Route::get('products/{id}/gallery', 'ProductController@gallery')
    ->name('products.gallery');

Route::get('transactions/{id}/setStatus', 'TransactionController@setStatus')
    ->name('transactions.status');
