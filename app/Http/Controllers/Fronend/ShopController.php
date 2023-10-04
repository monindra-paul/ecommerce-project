<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    
    public function index(Request $request, $categorySlug = null){

       $categories = Category::orderBy('name','ASC')->with('sub_category')->where('status',1)->get();

       $brands = Brand::orderBy('name','ASC')->where('status',1)->get();


       $products = Product::where('status',1);
       //filters

       if(!empty($categorySlug)){
        $category = Category::where('slug',$categorySlug)->first();
        $products = $products->where('category_id',$category->id);
       }




    //    $products = Product::orderBy('id','DESC')->where('status',1)->get();



        $products = $products->orderBy('id','DESC');
        $products = $products->paginate(10);


       $data['categories'] = $categories;
       $data['brands'] = $brands;
       $data['products'] = $products;

        return view('frontend.shop.shop',$data);
    }


    public function product($slug){
        // echo $slug;
        $product = Product::where('slug',$slug)->with('product_images')->first();

        if($product == null){
            abort(404);
        }
        


        $data['product'] = $product;


        return view('frontend.product.product',$data);
    }


}
