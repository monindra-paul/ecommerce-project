<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::orderBy('name','ASC')->with('sub_category')->where('status',1)->get();
 
        $brands = Brand::orderBy('name','ASC')->where('status',1)->get();
 
        $products = Product::orderBy('id','DESC')->where('status',1)->get();
 
 
        $data['categories'] = $categories;
        $data['brands'] = $brands;
        $data['products'] = $products;
 
         return view('frontend.category.category',$data);
     }
}
