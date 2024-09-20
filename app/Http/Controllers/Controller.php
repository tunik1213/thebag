<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class Controller
{

    public function product (string $slug) {
        $p = Product::where('slug', $slug)->firstOrFail();

        $viewdata = [
            'product' => $p,
            'title' => $p->meta_title,
            'description' => $p->meta_description
        ];

        return view('product',['viewdata'=>$viewdata]);
    }

    public function checkout(Request $request){
        $product_id = $request->input('p');
        $p = Product::findOrFail($product_id);
        return view('checkout',['product'=>$p]);
    }
}
