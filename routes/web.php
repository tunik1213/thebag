<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{slug}', function (string $slug) {
    $p = App\Models\Product::where('slug', $slug)->firstOrFail();

    $viewdata = [
        'product' => $p,
        'title' => $p->meta_title,
        'description' => $p->meta_description
    ];

    return view('product',['viewdata'=>$viewdata]);
});
