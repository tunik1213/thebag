<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{slug}', [Controller::class, 'product']);


Route::get('/checkout', [Controller::class, 'checkout']);
Route::post('/ordercomplete', [Controller::class, 'ordercomplete']);

Route::get('/notification', [Controller::class,'notification']);
Route::post('/addnotification', [Controller::class, 'addnotification']);