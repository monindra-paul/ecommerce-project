@extends('frontend.layout.app')
@section('header')
@include('frontend.common.home-header')
@endsection
@section('content')

<!-- START SECTION BANNER -->
<div class="mt-4 staggered-animation-wrap">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-7 offset-lg-3">
                <div class="banner_section shop_el_slider">
                    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active background_bg"
                                data-img-src="{{asset('assets/images/apex/apex-slider-3.webp')}}">
                                {{-- --}}
                            </div>
                            <div class="carousel-item background_bg"
                                data-img-src="{{asset('assets/images/apex/apex-slider-2.webp')}}">
                                {{-- --}}
                            </div>
                            <div class="carousel-item background_bg"
                                data-img-src="{{asset('assets/images/apex/apex-slider-1.webp')}}">
                                {{--  --}}
                            </div>
                        </div>
                        <ol class="carousel-indicators indicators_style3">
                            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 d-none d-lg-block">
                <div class="shop_banner2 el_banner1">
                    <a href="{{url('/shop')}}" class="hover_effect1">
                        <div class="el_title text_white">
                            <h6>Flat Discount on</h6>
                            <span>Apex Bags</span>
                        </div>
                        <div class="el_img">
                            <img src="{{asset('assets/images/apex/home-right-1.png')}}" alt="shop_banner_img6">
                        </div>
                    </a>
                </div>
                <div class="shop_banner2 el_banner2">
                    <a href="#" class="hover_effect1">
                        <div class="el_title text_white">
                            <h6>Get Your Duffle Bag</h6>
                            <span><u>Shop Now</u></span>
                        </div>
                        <div class="el_img">
                            <img src="{{asset('assets/images/apex/home-right-2.png')}}" alt="shop_banner_img7">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION BANNER -->




<!-- START SECTION CATEGORIES -->
<div class="section small_pb small_pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>Top Categories</h2>
                </div>
                <p class="text-center leads"></p>
            </div>
        </div>
        @if(getCategories()->isNotEmpty())
        <div class="row align-items-center">
            <div class="col-12">
                <div class="cat_slider cat_style1 mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5"
                    data-loop="true" data-dots="false" data-nav="true" data-margin="30"
                    data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "576":{"items": "4"}, "768":{"items": "5"}, "991":{"items": "6"}, "1199":{"items": "7"}}'>
                    @foreach(getCategories() as $category)
                    <div class="item">
                        <div class="categories_box">
                            <a href="{{route('front.shop',$category->slug)}}">
                                @if($category->image !="")
                                <img src="{{asset('uploads/category/thumb/'. $category->image)}}" alt="cat_img1" />
                                @endif
                                <span>{{$category->name}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- END SECTION CATEGORIES -->



<!-- END MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section small_pb small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Newly Launched Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style1">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">

                            {{-- <li class="nav-item active">
                                <a class="nav-link" id="sellers-tab" data-bs-toggle="tab" href="#sellers" role="tab"
                                    aria-controls="sellers" aria-selected="false">Best Sellers</a>
                            </li> --}}

                        </ul>
                    </div>
                    <div class="tab_slider tab-content">

                        <div class="tab-pane fade show active" id="sellers" role="tabpanel"
                            aria-labelledby="sellers-tab">
                            <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                data-loop="true" data-margin="20"
                                data-responsive='{"0":{"items": "2"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>

                                @if($products->isNotEmpty())
                                @foreach($products as $product)
                                @php
                                $productImage = $product->product_images->first();
                                @endphp


                                @php
                                $productImagehover = $product->product_images;
                                $secondProductImage = $productImagehover->count() > 1 ?
                                $productImagehover->skip(1)->first() : null;
                                @endphp

                                <div class="item"
                                    onclick="window.location.href= '{{route('front.product',$product->slug)}}'">

                                    <div class="product_wrap">
                                        <span class="pr_flash bg-danger">Hot</span>
                                        <a href="{{route('front.product',$product->slug)}}">
                                            @if(!empty($productImage->image))
                                            <div class="product_img">
                                                <a href="{{route('front.product',$product->slug)}}">
                                                    <img src="{{asset('uploads/product/small/'.$productImage->image)}}"
                                                        alt="el_img8">
                                                    @if($secondProductImage)
                                                    <img class="product_hover_img"
                                                        src="{{asset('uploads/product/small/'.$secondProductImage->image)}}"
                                                        alt="el_hover_img8">
                                                    @else
                                                    <img class="product_hover_img"
                                                        src="{{asset('uploads/product/small/'.$productImage->image)}}"
                                                        alt="el_hover_img8">
                                                    @endif
                                                </a>
                                            </div>
                                            @endif
                                        </a>
                                        <div class="product_info">
                                            <h6 class="product_title"><a
                                                    href="{{route('front.product',$product->slug)}}">{{$product->title}}</a>
                                            </h6>
                                            <a href="{{route('front.product',$product->slug)}}">
                                                <div class="product_price">
                                                    <span class="price"> ₹ {{$product->price}}</span>
                                                    @if($product->compare_price > 0)
                                                    <del>₹ {{$product->compare_price}}</del>
                                                    @endif
                                                    <div class="on_sale">
                                                        <span>{{round(($product->price / $product->compare_price )
                                                            *100),1}}% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:100%"></div>
                                                    </div>
                                                    {{-- <span class="rating_num">(15)</span> --}}
                                                </div>
                                                <div class="pr_desc">
                                                    <p>{{$product->shoet_description}}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION BANNER -->
    <div class="section pb_20 small_pt">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="{{url('/shop')}}">
                            <img src="{{asset('assets/images/apex/h-1.webp')}}" alt="shop_banner_img7">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="{{url('/shop')}}">
                            <img src="{{asset('assets/images/apex/h-2.webp')}}" alt="shop_banner_img8">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="{{url('/shop')}}">
                            <img src="{{asset('assets/images/apex/h-3.webp')}}" alt="shop_banner_img9">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER -->

   

    <!-- START SECTION SHOP -->
    <div class="section small_pt small_pb">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="sale-banner">
                        <a class="hover_effect1" href="{{url('/shop')}}">
                            <img src="{{asset('assets/images/apex/home-desktop-side2.webp')}}" alt="shop_banner_img10">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h4>Trending products</h4>
                                </div>
                                <div class="view_all">
                                    <a href="{{url('/shop')}}" class="text_default"><i class="linearicons-power"></i>
                                        <span>View
                                            All</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                data-loop="true" data-margin="20"
                                data-responsive='{"0":{"items": "2"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>

                                @if($allProducts->isNotEmpty())
                                @foreach($allProducts as $product)
                                    @php
                                    $productImage = $product->product_images->first();
                                    @endphp
                                    @php
                                    $productImagehover = $product->product_images;
                                    $secondProductImage = $productImagehover->count() > 1 ?
                                    $productImagehover->skip(1)->first() : null;
                                    @endphp
                                    <div class="item"
                                        onclick="window.location.href= '{{route('front.product',$product->slug)}}'">
                                        <div class="product_wrap">
                                            <a href="{{route('front.product',$product->slug)}}">
                                                @if(!empty($productImage->image))
                                                <div class="product_img">
                                                    <a href="{{route('front.product',$product->slug)}}">
                                                        <img src="{{asset('uploads/product/small/'.$productImage->image)}}"
                                                            alt="el_img8">
                                                        @if($secondProductImage)
                                                        <img class="product_hover_img"
                                                            src="{{asset('uploads/product/small/'.$secondProductImage->image)}}"
                                                            alt="el_hover_img8">
                                                        @else
                                                        <img class="product_hover_img"
                                                            src="{{asset('uploads/product/small/'.$productImage->image)}}"
                                                            alt="el_hover_img8">
                                                        @endif
                                                    </a>
                                                </div>
                                                @endif
                                            </a>

                                            <div class="product_info">
                                                <h6 class="product_title"><a
                                                        href="{{route('front.product',$product->slug)}}">{{$product->title}}</a>
                                                </h6>
                                                <a href="{{route('front.product',$product->slug)}}">
                                                    <div class="product_price">
                                                        <span class="price"> ₹ {{$product->price}}</span>
                                                        @if($product->compare_price > 0)
                                                        <del>₹ {{$product->compare_price}}</del>
                                                        @endif
                                                        @if($product->compare_price > 0)
                                                        <div class="on_sale">
                                                            <span>{{round(($product->price / $product->compare_price )
                                                                *100)}}% Off</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:100%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="pr_desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                            nunc.</p>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->



    <div class="section bg_redon">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Our Client Say!</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2 owl-loaded owl-drag"
                        data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true"
                        data-items="1">




                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transition: all 0.25s ease 0s; width: 3104px; transform: translate3d(-776px, 0px, 0px);">
                                <div class="owl-item cloned" style="width: 388px;">
                                    <div class="testimonial_box">
                                        <div class="testimonial_desc">
                                            <p>Bought two Apex Bags luggage 6 months back.one big size in nylon and
                                                other cabin size with 4 wheels.both has got good space infact the canin
                                                size fits perfect in plane cabin. Both bags are tough and with 4 wheels
                                                its easy to use. It has got 3 yrs warranty so use rough and tough and go
                                                for it.</p>
                                        </div>
                                        <div class="author_wrap">
                                            <div class="author_img">
                                                <img src="{{asset('assets/images/apex/apex-logo.webp')}}"
                                                    alt="user_img3">
                                            </div>
                                            <div class="author_name">
                                                <h6>Biplab Paul</h6>
                                                <span>Kolkata</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 388px;">
                                    <div class="testimonial_box">
                                        <div class="testimonial_desc">
                                            <p>What can I say about Apex bags, it is the most durable bag I have used.
                                                Whenever I go I carry this bag, which makes me feel comfortable and
                                                stylist.</p>
                                        </div>
                                        <div class="author_wrap">
                                            <div class="author_img">
                                                <img src="{{asset('assets/images/apex/apex-logo.webp')}}"
                                                    alt="user_img4">
                                            </div>
                                            <div class="author_name">
                                                <h6>Nilimesh Khan</h6>
                                                <span>Nadia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active center" style="width: 388px;">
                                    <div class="testimonial_box">
                                        <div class="testimonial_desc">
                                            <p>I had purchased a Apex Bags's Bagpack worth rs 1000.And iam very happy
                                                with this bag pack. I will say its better then american tourister's
                                                bagpacks.</p>
                                        </div>
                                        <div class="author_wrap">
                                            <div class="author_img">
                                                <img src="{{asset('assets/images/apex/apex-logo.webp')}}"
                                                    alt="user_img1">
                                            </div>
                                            <div class="author_name">
                                                <h6>Kunal Sarkar</h6>
                                                <span>Siliguri</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active center" style="width: 388px;">
                                    <div class="testimonial_box">
                                        <div class="testimonial_desc">
                                            <p>I have bought a big trolley for my sister marriage as well from Apex Bags
                                                as I have been using it and have trust on this brand. Now they have come
                                                with various different products. Hope they continue giving the quality
                                                product to the consumer.</p>
                                        </div>
                                        <div class="author_wrap">
                                            <div class="author_img">
                                                <img src="{{asset('assets/images/apex/apex-logo.webp')}}"
                                                    alt="user_img1">
                                            </div>
                                            <div class="author_name">
                                                <h6>Rajat Ghosh</h6>
                                                <span>Kolkata</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active center" style="width: 388px;">
                                    <div class="testimonial_box">
                                        <div class="testimonial_desc">
                                            <p>Awesome material. Its the best quality. The material in it has a
                                                fantastic quality. Most desirable by new generation. And I would
                                                recommend my colleagues to buy this. One of them asked me to give my bag
                                                but I denied. Again I can not stop my self to praise it

                                            </p>
                                        </div>
                                        <div class="author_wrap">
                                            <div class="author_img">
                                                <img src="{{asset('assets/images/apex/apex-logo.webp')}}"
                                                    alt="user_img1">
                                            </div>
                                            <div class="author_name">
                                                <h6>Mohini Karmakar</h6>
                                                <span>Howrah</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                            class="ion-ios-arrow-left"></i></button><button type="button"
                                        role="presentation" class="owl-next"><i
                                            class="ion-ios-arrow-right"></i></button></div>
                                <div class="owl-dots disabled">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- START SECTION BANNER -->
            <div class="section pb_20 small_pt">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sale-banner mb-3 mb-md-4">
                                <a class="hover_effect1" href="#">
                                    <img src="{{asset('assets/images/apex/apex-footer.webp')}}"
                                        alt="apex-footer-banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION BANNER -->






        </div>
        <!-- END MAIN CONTENT -->


        @endsection