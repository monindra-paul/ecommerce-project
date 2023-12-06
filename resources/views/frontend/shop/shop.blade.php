@extends('frontend.layout.app')
@section('content')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Apex Products</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{('/shop')}}">Shop</a></li>                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="product_header">
                                    <div class="product_header_left">
                                        <div class="custom_select">
                                            <select class="form-control form-control-sm">
                                                <option value="order">Default sorting</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="product_header_right">
                                        <div class="products_view">
                                            <a href="javascript:;" class="shorting_icon grid active"><i
                                                    class="ti-view-grid"></i></a>
                                            <a href="javascript:;" class="shorting_icon list"><i
                                                    class="ti-layout-list-thumb"></i></a>
                                        </div>
                                        {{-- <div class="custom_select">
                                            <select class="form-control form-control-sm">
                                                <option value="">Showing</option>
                                                <option value="9">9</option>
                                                <option value="12">12</option>
                                                <option value="18">18</option>
                                            </select>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row shop_container">
                            @if($products->isNotEmpty())
                            @foreach($products as $product)
                            <div class="col-md-4 col-6">



                                @php
                                $productImage = $product->product_images->first();
                                @endphp
                                <div class="product">
                                    <div class="product_img">
                                        @if(!empty($productImage->image))
                                        <a href="{{route('front.product',$product->slug)}}">
                                            <img src="{{asset('uploads/product/small/'.$productImage->image)}}" alt="product_img1">
                                        </a>
                                       @endif
                                    </div>
                                    <div class="product_info">
                                        <h5 style="color:#FF1C3A; font-size:15px;"><a href="{{route('front.shop',$product->product_category->slug)}}">{{$product->product_category->name}}</a></h5>
                                        <h6 class="product_title"><a href="{{route('front.product',$product->slug)}}">{{$product->title}}</a></h6>
                                        <div class="product_price">

                                            <span class="price">₹ {{$product->price}}</span>
                                            @if($product->compare_price > 0)
                                                <del>₹ {{$product->compare_price}}</del>
                                            @endif

                                            <div class="on_sale">
                                                <span>{{round(($product->price / $product->compare_price ) *100),1}}% Off</span>
                                            </div>

                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            {{-- <span class="rating_num">(21)</span> --}}
                                        </div>
                                        <div class="pr_desc">
                                            <p>{!!$product->short_description!!}</p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#DA323F"></span>
                                               
                                            </div>
                                        </div>
                                        <div class="list_product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="https://api.whatsapp.com/send?phone=917001639863"><i class="linearicons-phone-wave"></i>
                                                        Reach Us</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                            @endforeach
                            @endif
                            
                        </div>



                        {{$products->links()}}


                        
                    </div>
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
                            @if($categories->isNotEmpty())
                            <div class="widget">
                                <h5 class="widget_title">Categories</h5>
                                <ul class="widget_categories">
                                    @foreach ($categories as $category)
                                    <li><a href="{{route('front.shop',$category->slug)}}" id="{{($categorySelected == $category->id) ? 'catselected' : ''}}" ><span class="categories_name">{{$category->name}}</span></a>                                               
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            @endif
                            
                            <div class="widget">
                                <div class="shop_banner">
                                    <div class="banner_img overlay_bg_20">
                                        <img src="assets/images/sidebar_banner_img.jpg" alt="sidebar_banner_img">
                                    </div>
                                    <div class="shop_bn_content2 text_white">
                                        <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                        <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                        <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        

    </div>
    <!-- END MAIN CONTENT -->


@endsection