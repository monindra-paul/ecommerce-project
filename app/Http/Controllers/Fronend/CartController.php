<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request){
        
        $product = Product::find($request->id);
        // Cart::add('293ad', 'Product 1', 1, 9.99);

    }


    public function cart(){
        return view('frontend.cart.cart');
    }


}
