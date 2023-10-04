@extends('frontend.layout.app')
@section('content')



<main>

    <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Only Categories</h3>
                        <div class="breadcrumb__list">
                            <span><a href="#">Home</a></span>
                            <span>Only Categories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- banner area start -->
    <section class="tp-banner-area pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="tp-banner-item tp-banner-height has-square p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3"
                            data-background="assets/img/product/banner/product-banner-1.jpg"></div>
                        <div class="tp-banner-content">
                            <span>Sale 20% off all store</span>
                            <h3 class="tp-banner-title">
                                <a href="product-details.html">Smartphone <br> BLU G91 Pro 2022</a>
                            </h3>
                            <div class="tp-banner-btn">
                                <a href="product-details.html" class="tp-link-btn">Shop Now
                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div
                        class="tp-banner-item tp-banner-item-sm has-square tp-banner-height p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3"
                            data-background="assets/img/product/banner/product-banner-2.jpg"></div>
                        <div class="tp-banner-content">
                            <h3 class="tp-banner-title">
                                <a href="product-details.html">HyperX Cloud II <br> Wireless</a>
                            </h3>
                            <p>Sale 35% off</p>
                            <div class="tp-banner-btn">
                                <a href="product-details.html" class="tp-link-btn">Shop Now
                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- category area start -->


    <!-- product category area start -->
   <section class="tp-product-category pt-10 pb-15">
    <div class="container">
       @if($categories->isNotEmpty())
       <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-4">
          @foreach($categories as $category)
          <div class="col">
             <div class="tp-product-category-item text-center mb-40">
                @if($category->image !="")
                <div class="tp-product-category-thumb fix">
                   <a href="{{route('front.shop',$category->slug)}}">
                      <img src="{{asset('uploads/category/thumb/'. $category->image)}}" alt="product-category">
                   </a>
                </div>
                @endif
                <div class="tp-product-category-content">
                   <h3 class="tp-product-category-title">
                      <a href="{{route('front.shop',$category->slug)}}">{{$category->name}}</a>
                   </h3>
                   {{-- @foreach($categories as $categoryc)
                   <p>{{ $categoryc->products_count}} Product</p>
                   @endforeach --}}
                </div>
             </div>
          </div>
          @endforeach
       </div>
       @endif
    </div>
 </section>
 <!-- product category area end -->
    </section>
    <!-- category area end -->


    <!-- subscribe area start -->
    <section class="tp-subscribe-area tp-subscribe-square pt-70 pb-65 theme-bg p-relative z-index-1">
        <div class="tp-subscribe-shape">
            <img class="tp-subscribe-shape-1" src="assets/img/subscribe/subscribe-shape-1.png" alt="">
            <img class="tp-subscribe-shape-2" src="assets/img/subscribe/subscribe-shape-2.png" alt="">
            <img class="tp-subscribe-shape-3" src="assets/img/subscribe/subscribe-shape-3.png" alt="">
            <img class="tp-subscribe-shape-4" src="assets/img/subscribe/subscribe-shape-4.png" alt="">
            <!-- plane shape -->
            <div class="tp-subscribe-plane">
                <img class="tp-subscribe-plane-shape" src="assets/img/subscribe/plane.png" alt="">
                <svg width="399" height="110" class="d-none d-sm-block" viewBox="0 0 399 110" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22"
                        stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3" />
                </svg>
                <svg class="d-sm-none" width="193" height="110" viewBox="0 0 193 110" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046"
                        stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3" />
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="tp-subscribe-content">
                        <span>Sale 20% off all store</span>
                        <h3 class="tp-subscribe-title">Subscribe our Newsletter</h3>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="tp-subscribe-form">
                        <form action="#">
                            <div class="tp-subscribe-input">
                                <input type="email" placeholder="Enter Your Email">
                                <button type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe area end -->
</main>


@endsection