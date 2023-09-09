@extends('frontend.layout.app')
@section('content')
    <!-- home slider start -->
    <section class="pt-0 overflow-hidden">
        <div>
            <div class="banner-slider box-arrow">
                <!-- Slider 1 Start -->
                <div class="banner-poster">
                    <div class="slider-right-detail">
                        <div class="labels">
                            <ul class="label-15">
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <img src="{{asset('frontend/assets/images/social-icon/1.png')}}" class="img-fluid blur-up lazyload"
                                            alt="facebook">
                                        <h5 class="d-lg-block d-none">Facebook</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/">
                                        <img src="{{asset('frontend/assets/images/social-icon/2.png')}}" class="img-fluid blur-up lazyload"
                                            alt="Instagram">
                                        <h5 class="d-lg-block d-none">Instagram</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <img src="{{asset('frontend/assets/images/social-icon/3.png')}}" class="img-fluid blur-up lazyload"
                                            alt="Twitter">
                                        <h5 class="d-lg-block d-none">Twitter</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h4>New Festival Offer</h4>
                        <div class="offer-box">
                            <h6>65% off</h6>
                        </div>
                    </div>

                    <div class="slider-bg">
                        <div class="bg-text">
                            <span>Nike shoes</span>
                        </div>

                        <div class="bg-circle gradient-purple"></div>
                        <img src="{{asset('frontend/assets/images/shoes/1-.png')}}" class="shoes-1 img-fluid blur-up lazyload" alt="">
                    </div>

                    <div class="sugestion-product d-xl-block d-none">
                        <h3>Sugestion Product</h3>
                        <h6>Our Collection</h6>

                        <a href="product-left-sidebar.html" class="slider-shoes-image d-block">
                            <div class="relative-shoes">
                                <img src="{{asset('frontend/assets/images/shoes/slider-2.png')}}" class="img-fluid blur-up lazyload" alt="">
                                <div class="shoes-price">
                                    <h5>$49.00</h5>
                                    <h6>Nike Shoes</h6>
                                    <ul class="rating d-flex justify-content-between">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="price-number">
                        <h2>$79.00 <span><del>$65.00</del></span></h2>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minima asperiores
                            possimus ad quae.</h6>
                    </div>

                    <div class="slider-arrow-2">
                        <div class="left-arrow d-lg-block d-none"></div>
                        <div class="right-arrow d-lg-block d-none"></div>
                    </div>
                </div>
                <!-- Slider 1 End -->

                <!-- Slider 2 Start -->
                <div class="banner-poster">
                    <div class="slider-right-detail">
                        <div class="labels">
                            <ul class="label-15">
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <img src="{{asset('frontend/assets/images/social-icon/1.png')}}" class="img-fluid blur-up lazyload"
                                            alt="facebook">
                                        <h5 class="d-lg-block d-none">Facebook</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/">
                                        <img src="{{asset('frontend/assets/images/social-icon/2.png')}}" class="img-fluid blur-up lazyload"
                                            alt="Instagram">
                                        <h5 class="d-lg-block d-none">Instagram</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <img src="{{asset('frontend/assets/images/social-icon/3.png')}}" class="img-fluid blur-up lazyload"
                                            alt="Twitter">
                                        <h5 class="d-lg-block d-none">Twitter</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h4>New Festival Offer</h4>
                        <div class="offer-box">
                            <h6>65% off</h6>
                        </div>
                    </div>

                    <div class="slider-bg">
                        <div class="bg-text">
                            <span>Nike shoes</span>
                        </div>

                        <div class="bg-circle red-gradient"></div>
                        <img class="shoes-1 img-fluid blur-up lazyload" alt="" src="{{asset('frontend/assets/images/shoes/slider-2.png')}}">
                    </div>

                    <div class="sugestion-product d-xl-block d-none">
                        <h3>Sugestion Product</h3>
                        <h6>Our Collection</h6>

                        <a href="product-left-sidebar.html" class="slider-shoes-image d-block">
                            <div class="relative-shoes">
                                <img src="{{asset('frontend/assets/images/shoes/Slider.png')}}" class="img-fluid blur-up lazyload" alt="">
                                <div class="shoes-price">
                                    <h5>$49.00</h5>
                                    <h6>Nike Shoes</h6>
                                    <ul class="rating d-flex justify-content-between">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="price-number">
                        <h2>$79.00 <span><del>$65.00</del></span></h2>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minima asperiores
                            possimus ad quae.</h6>
                    </div>

                    <div class="slider-arrow-2">
                        <div class="left-arrow d-lg-block d-none"></div>
                        <div class="right-arrow d-lg-block d-none"></div>
                    </div>
                </div>
                <!-- Slider 2 End -->

                <!-- Slider 3 Start -->
                <div class="banner-poster">
                    <div class="slider-right-detail">
                        <div class="labels">
                            <ul class="label-15">
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend/assets/images/social-icon/1.png')}}" class="img-fluid blur-up lazyload"
                                            alt="facebook">
                                        <h5 class="d-lg-block d-none">Facebook</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend/assets/images/social-icon/2.png')}}" class="img-fluid blur-up lazyload"
                                            alt="Instagram">
                                        <h5 class="d-lg-block d-none">Instagram</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend/assets/images/social-icon/3.png')}}" class="img-fluid blur-up lazyload"
                                            alt="Twitter">
                                        <h5 class="d-lg-block d-none">Twitter</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h4>New Festival Offer</h4>
                        <div class="offer-box">
                            <h6>65% off</h6>
                        </div>
                    </div>

                    <div class="slider-bg">
                        <div class="bg-text">
                            <span>Nike shoes</span>
                        </div>

                        <div class="bg-circle gradient-blue"></div>
                        <img class="shoes-1 img-fluid blur-up lazyload" alt="" src="{{asset('frontend/assets/images/shoes/Slider.png')}}">
                    </div>

                    <div class="sugestion-product d-xl-block d-none">
                        <h3>Sugestion Product</h3>
                        <h6>Our Collection</h6>

                        <a href="product-left-sidebar.html" class="slider-shoes-image d-block">
                            <div class="relative-shoes">
                                <img src="{{asset('frontend/assets/images/shoes/1-.png')}}" class="img-fluid blur-up lazyload" alt="">
                                <div class="shoes-price">
                                    <h5>$49.00</h5>
                                    <h6>Nike Shoes</h6>
                                    <ul class="rating d-flex justify-content-between">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="price-number">
                        <h2>$79.00 <span><del>$65.00</del></span></h2>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minima asperiores
                            possimus ad quae.</h6>
                    </div>

                    <div class="slider-arrow-2">
                        <div class="left-arrow d-lg-block d-none"></div>
                        <div class="right-arrow d-lg-block d-none"></div>
                    </div>
                </div>
                <!-- Slider 3 End -->
            </div>
        </div>
    </section>
    <!-- home slider end -->

    <!-- Custome services Section Start -->
    <section class="service-section">
        <div class="container">
            <div class="row g-4 g-sm-3">
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#customer"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Customer Servcies</h3>
                            <span class="font-light">Top notch customer service.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#shop"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Pickup At Any Store</h3>
                            <span class="font-light">Free shipping on orders over $65.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#secure-payment"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Secured Payment</h3>
                            <span class="font-light">We accept all major credit cards.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#return"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Free Returns</h3>
                            <span class="font-light">30-days free return policy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Custome services Section End -->

    <!-- Poster Section Start -->
    <section class="poster-section ratio2_1">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="poster-image">
                            <img src="{{asset('frontend/assets/images/shoes/poster/1.png')}}" class="img-fluid bg-img blur-up lazyload"
                                alt="">
                            <div class="poster-image-details">
                                <div>
                                    <h5>Get 25% Rewarded</h5>
                                    <h2>Latest Sport Shoes</h2>
                                    <p class="d-sm-block d-none my-1">Fully Comforable and Smooth Product</p>
                                    <h3>$49.00 <span><del>$58.00</del></span></h3>
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn btn-solid-default">BUY NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="poster-image">
                            <img src="{{asset('frontend/assets/images/shoes/poster/2.png')}}" class="img-fluid bg-img blur-up lazyload"
                                alt="">
                            <div class="poster-image-details">
                                <div>
                                    <h5>Get 38% Rewarded</h5>
                                    <h2>Perfect Mixture Shoes</h2>
                                    <p class="d-sm-block d-none my-1">Fully Comforable and Smooth Product</p>
                                    <h3>$56.00 <span><del>$58.00</del></span></h3>
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn btn-solid-default">BUY NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Poster Section End -->

    <!-- New Arrival Section Start -->
    <section class="ratio_asos">
        <div class="container-fluid p-sm-0">
            <div class="row m-0">
                <div class="col-sm-12 p-0">
                    <div class="title title-2 text-center">
                        <h2>Latrest Product</h2>
                        <h5>Our Collection</h5>
                    </div>
                    <div class="product-wrapper slide-6">
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/product/1.jpg')}}"
                                            class="bg-img img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="label-block">
                                        <span class="label label-black">New</span>
                                        <span class="label label-theme">50% Off</span>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/product/2.jpg')}}"
                                            class="bg-img img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="label-block">
                                        <span class="label label-dark">On discount</span>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/product/3.jpg')}}"
                                            class="bg-img img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/product/1.jpg')}}"
                                            class="bg-img img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Dell MS 116 Wired Optical Mouse</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/product/4.jpg')}}"
                                            class="bg-img img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="label-block">
                                        <span class="label label-theme">Best value</span>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/product/5.jpg')}}"
                                            class="bg-img img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/product/6.jpg')}}"
                                            class="bg-img img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrival Section End -->

    <!-- Banner Style 2 Section Start -->
    <section class="banner-style-2 offer-banner">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 ratio2_1">
                    <div class="collection-banner p-right text-right">
                        <a href="shop-left-sidebar.html" class="banner-img">
                            <img src="{{asset('frontend/assets/images/shoes/poster-2/1.jpg')}}" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-text">
                            <div class="banner-content">
                                <h6>New <span class="theme-color">Collections</span></h6>
                                <h2> New Red <br> Shoes<span class="theme-color d-block">$48</span></h2>
                                <button class=" btn default-light default-theme mt-md-2 mt-1 rounded">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-lg-12 ratio_40">
                            <div class="collection-banner p-left banner-title">
                                <a href="shop-left-sidebar.html" class="banner-img">
                                    <img src="{{asset('frontend/assets/images/shoes/poster-2/2.jpg')}}" class="bg-img blur-up lazyload"
                                        alt="">
                                </a>

                                <div class="banner-text">
                                    <div class="banner-content">
                                        <h3 class="mb-md-2 mb-0 spacing-text">New Hoodies from <span
                                                class="theme-color">$34</span>
                                        </h3>
                                        <button class=" btn default-light default-light-theme mt-md-2 mt-1 rounded">SHOP
                                            NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 ratio2_3">
                            <div class="collection-banner p-center text-center">
                                <a href="shop-left-sidebar.html" class="banner-img">
                                    <img src="{{asset('frontend/assets/images/shoes/poster-2/3.jpg')}}" class="bg-img blur-up lazyload"
                                        alt="">
                                </a>
                                <a href="shop-left-sidebar.html" class="contain-banner">
                                    <div class="banner-content spacing-banner with-bg">
                                        <h3 class="mb-1">New jacket</h3>
                                        <span>Discount -70%</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 ratio2_3">
                            <div class="collection-banner p-center text-center">
                                <a href="shop-left-sidebar.html" class="banner-img">
                                    <img src="{{asset('frontend/assets/images/shoes/poster-2/4.jpg')}}" class="bg-img blur-up lazyload"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Style 2 Section End -->

    <!-- category section start -->
    <section class="category-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title title-2 text-center">
                        <h2>Our Category</h2>
                        <h5>Our collection</h5>
                    </div>
                </div>
            </div>

            <div class="category-wrapper category-slider white-arrow">
                <div>
                    <div class="category-wrap category-color">
                        <a href="shop-category-slider.html">
                            <img src="{{asset('frontend/assets/images/shoes/category/1.png')}}" class="img-fluid blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text t-text">
                                <h3>Canvas</h3>
                                <span>$45 - $80</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="category-wrap category-color">
                        <a href="shop-category-slider.html">
                            <img src="{{asset('frontend/assets/images/shoes/category/2.png')}}" class="img-fluid blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text t-text">
                                <h3>Canvas</h3>
                                <span>$45 - $80</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="category-wrap category-color">
                        <a href="shop-category-slider.html">
                            <img src="{{asset('frontend/assets/images/shoes/category/3.png')}}" class="img-fluid blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text t-text">
                                <h3>Canvas</h3>
                                <span>$45 - $80</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="category-wrap category-color">
                        <a href="shop-category-slider.html">
                            <img src="{{asset('frontend/assets/images/shoes/category/4.png')}}" class="img-fluid blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text t-text">
                                <h3>Canvas</h3>
                                <span>$45 - $80</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="category-wrap category-color">
                        <a href="shop-category-slider.html">
                            <img src="{{asset('frontend/assets/images/shoes/category/5.png')}}" class="img-fluid blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text t-text">
                                <h3>Canvas</h3>
                                <span>$45 - $80</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="category-wrap category-color">
                        <a href="shop-category-slider.html">
                            <img src="{{asset('frontend/assets/images/shoes/category/6.png')}}" class="img-fluid blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text t-text">
                                <h3>Canvas</h3>
                                <span>$45 - $80</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="category-wrap category-color">
                        <a href="shop-category-slider.html">
                            <img src="{{asset('frontend/assets/images/shoes/category/7.png')}}" class="img-fluid blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text t-text">
                                <h3>Canvas</h3>
                                <span>$45 - $80</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->

    <!-- product section start -->
    <section class="ratio_asos">
        <div class="container">
            <div class="row m-0">
                <div class="col-sm-12 p-0">
                    <div class="title title-2 text-center">
                        <h2>New Arrival</h2>
                        <h5>Our collection</h5>
                    </div>
                    <div class="product-wrapper slide-5 light-arrow bottom-space">
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/1.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/2.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/3.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/4.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/5.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/6.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/7.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/8.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('frontend/assets/images/shoes/latest-product/9.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Latest Sports Shoes</h5>
                                    </a>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

    <!-- Deal Day Section Start -->
    <section class="deal-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="discount-image-details">
                        <div class="discount-images">
                            <div class="theme-circle"></div>
                            <img src="{{asset('frontend/assets/images/shoes/deal/1.png')}}" alt=""
                                class="img-fluid shoes-images-1 blur-up lazyload">
                            <img src="{{asset('frontend/assets/images/shoes/deal/1.png')}}" alt=""
                                class="img-fluid shoes-images-2 blur-up lazyload">
                        </div>

                        <div class="discunt-details mt-xl-0 mt-4">
                            <div>
                                <div class="heart-button">
                                    <i class="fas fa-heart theme-color"></i>
                                </div>
                                <h5 class="mt-3">Special Discount <span class="theme-color">70% OFF</span></h5>
                                <h2 class="my-3 deal-text">Deal Of The Day <br>from <span class="theme-color">$75</span>
                                </h2>
                                <div class="timer-style-2 mt-xl-1 my-2 justify-content-center d-flex">
                                    <ul>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="days1" class="theme-color"></h2>Days
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="hours1" class="theme-color"></h2>Hour
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="minutes1" class="theme-color"></h2>Min
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="seconds1" class="theme-color"></h2>Sec
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                    class="btn default-light-theme default-theme mt-2">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Day Section end -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section section-b-space">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="subscribe-details">
                            <h2 class="mb-3">Subscribe Our News</h2>
                            <h6>Subscribe and receive our newsletters to follow the news about our fresh and fantastic
                                Shoes Products.</h6>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                        <div class="subsribe-input">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address"
                                    aria-label="Recipient's username">
                                <button class="btn btn-solid-default btn-spacing" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->

    <!-- brand section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brand-slider">
                        <div>
                            <div class="brand-image">
                                <img src="{{asset('frontend/assets/images/brand/1.png')}}" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="{{asset('frontend/assets/images/brand/2.png')}}" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="{{asset('frontend/assets/images/brand/3.png')}}" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="{{asset('frontend/assets/images/brand/4.png')}}" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="{{asset('frontend/assets/images/brand/5.png')}}" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="{{asset('frontend/assets/images/brand/6.png')}}" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="{{asset('frontend/assets/images/brand/4.png')}}" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand section end -->
@endsection