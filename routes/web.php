<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{slug}', function (string $slug) {
    $p = App\Models\Product::where('slug', $slug)->firstOrFail();

    $viewdata = [
        'product' => $p,
        'title' => $p->name,
        'description' => $p->description
    ];

    return view('product',['viewdata'=>$viewdata]);
});
