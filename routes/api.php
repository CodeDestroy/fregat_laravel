<?php
use App\Http\Controllers\CatalogController;

Route::prefix('catalog')->group(function () {

    Route::get('/categories', [CatalogController::class, 'categories']);

    Route::get('/category/{id}', [CatalogController::class, 'category']);

    Route::get('/product/{id}', [CatalogController::class, 'product']);

    Route::get('/search', [CatalogController::class, 'search']);

});