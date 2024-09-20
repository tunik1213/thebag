<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{slug}', [Controller::class, 'product']);


Route::get('/checkout', [Controller::class, 'checkout']);

