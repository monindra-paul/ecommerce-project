<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
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

        $data['featuredProducts'] = $products;


       $latestProducts =  Product::orderBy('id','DESC')
        ->where('status',1)
        ->take(8)
        ->get();

        $data['latestProducts'] = $latestProducts;



        return view('frontend.home.index',$data);
    }
}
