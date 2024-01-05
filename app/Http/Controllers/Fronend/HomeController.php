<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
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


       $allProducts =  Product::orderBy('id','ASC')
        ->where('status',1)
        ->take(6)
        ->get();


       $allBrands =  Brand::orderBy('id','ASC')
        ->where('status',1)
        ->get();

        $lim_cats = Category::orderBy('id','DESC')->where('status',1)->take(6)->get();


        $data['allProducts'] = $allProducts;
        $data['lim_cats'] = $lim_cats;
        $data['allBrands'] = $allBrands;



        return view('frontend.home.index',$data);
    }


    public function category(){        
        $categories = Category::withCount('products')->get();
     
        return view('frontend.home.index', compact('categories'));
    }


    public function brand(Request $request, $brandSlug = null){

        $brandSelected = "";
        $categorySelected = "";
        $brands = Brand::orderBy('name','ASC')->where('status',1)->get();
        $products = Product::where('status',1);
        $categories = Category::orderBy('name','ASC')->with('sub_category')->where('status',1)->get();
        

         //brands

         if(!empty($brandSlug)){
            $brand = Brand::where('slug',$brandSlug)->first();
            // echo $brand;
            $products = $products->where('brand_id',$brand->id);
            $products = $products->paginate(10);
          

            $data['brandSelected'] = $brandSelected;
            $data['brands'] = $brands;
            $data['products'] = $products;
            $data['categories'] = $categories;
            $data['categorySelected'] = $categorySelected;

            return view('frontend.shop.shop',$data);
        }

    }


}
