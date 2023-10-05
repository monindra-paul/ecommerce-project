<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

       $products =  Product::where('is_featured','Yes')
        ->orderBy('id','DESC')
        ->take(8)
        ->where('status',1)
        ->get();

        $data['products'] = $products;


       $allProducts =  Product::orderBy('id','DESC')
        ->where('status',1)
        ->take(6)
        ->get();

        $data['allProducts'] = $allProducts;



        return view('frontend.home.index',$data);
    }


    public function category(){        
        $categories = Category::withCount('products')->get();
        return view('frontend.home.index', compact('categories'));
    }
}
