<?php

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('products.index'); // Redirect '/' to the products index
});

Route::resource('products', ProductController::class);


