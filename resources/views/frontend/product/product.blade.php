@extends('frontend.layout.app')
@section('header')
@include('frontend.common.header')
@endsection
@section('content')


    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Product Detail</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/shop')}}">Product</a></li>
                        <li class="breadcrumb-item active" style="color: #FF1C3A;">{{$product->title}}</li>
                    </ol>
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
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image">
                            @if($product->product_images)
                           
                            @php
                            $productImage = $product->product_images->first();
                            @endphp
                            <div class="product_img_box ">
                                <img id="product_img" class="slick_slider" src='{{asset('uploads/product/large/'.$productImage->image)}}'
                                    data-zoom-image="{{asset('uploads/product/large/'.$productImage->image)}}" alt="product_img1" />
                                <a href="#" class="product_img_zoom" title="Zoom">
                                    <span class="linearicons-zoom-in"></span>
                                </a>
                            </div>
                            
                            @endif
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4"
                                data-slides-to-scroll="1" data-infinite="false">
                                @if($product->product_images)
                                    @foreach($product->product_images as $key => $productImage)
                                        <div class="item {{($key == 0) ? 'active' : ''}}">
                                            <a href="#" class="product_gallery_item "
                                                data-image="{{asset('uploads/product/large/'.$productImage->image)}}"
                                                data-zoom-image="{{asset('uploads/product/large/'.$productImage->image)}}">
                                                <img src="{{asset('uploads/product/large/'.$productImage->image)}}" alt="product_small_img1" />
                                            </a>
                                        </div>
                                    @endforeach
                                @endif                                
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{$product->title}}</a></h4>
                                <div class="product_price">
                                    <span class="price">₹ {{$product->price}}</span>
                                    @if($product->compare_price > 0)
                                    <span class="tp-product-details-price old-price">₹ {{$product->compare_price}}</span>
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
                                <div class="product_sort_info">
                                    <ul>
                                        <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty
                                        </li>
                                        <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                        <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                    </ul>
                                </div>
                                {{-- <div class="pr_switch_wrap">
                                    <span class="switch_lable">Color</span>
                                    <div class="product_color_switch">
                                        <span class="active" data-color="#87554B"></span>
                                        <span data-color="#333333"></span>
                                        <span data-color="#DA323F"></span>
                                    </div>
                                </div> --}}
                                @if(!empty($product->sizes))
                                <div class="pr_switch_wrap">
                                    <span style="color: #FF1C3A" class="switch_lable">Size:</span>
                                    <div class="product_size_switch">
                                        <p>{{$product->sizes}}</p>
                                        
                                    </div>
                                </div>
                                @endif
                                @if(!empty($product->colors))
                                <div class="pr_switch_wrap">
                                    <span style="color: #FF1C3A" class="switch_lable">Available Colors:</span>
                                    <div class="product_size_switch">
                                        <p>{{$product->colors}}</p>                                        
                                    </div>
                                </div>
                                @endif
                                @if(!empty($product->sku))
                                <div class="pr_switch_wrap">
                                    <span style="color: #FF1C3A" class="switch_lable">SKU:</span>
                                    <div class="product_size_switch">
                                        <p>{{$product->sku}}</p>                                        
                                    </div>
                                </div>
                                @endif
                                @if(!empty($product->product_category))
                                <div class="pr_switch_wrap">
                                    <span style="color: #FF1C3A" class="switch_lable">Product Category:</span>
                                    <div class="product_size_switch">
                                        <p>{{$product->product_category->name}}</p>                                        
                                    </div>
                                </div>
                                @endif
                            </div>
                            <hr />
                            <div class="cart_extra">
                                {{-- <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div> --}}
                                <div class="cart_btn">
                                    <a href="https://api.whatsapp.com/send?phone=917001639863" target="_blank" class="btn btn-fill-out btn-addtocart" type="button"><i class="linearicons-phone-wave"></i>Reach Us</a>
                                    {{-- <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                    <a class="add_wishlist" href="#"><i class="icon-heart"></i></a> --}}
                                </div>
                            </div>
                            <hr />
                            {{-- <ul class="product-meta">
                                <li>SKU: <a href="#">{{$product->sku}}</a></li>
                                <li>Category: <a href="#">{{$product->product_category->name}}</a></li>
                                <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">printed</a> </li>
                            </ul> --}}

                            <div class="product_share">
                                <span>Share:</span>
                                <ul class="social_icons">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description" role="tab" aria-controls="Description"
                                        aria-selected="true">About Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                        href="#Additional-info" role="tab" aria-controls="Additional-info"
                                        aria-selected="false">Product Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews" role="tab"
                                        aria-controls="Reviews" aria-selected="false">Reviews (2)</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel"
                                    aria-labelledby="Description-tab">
                                    <p>{!!$product->description!!}</p>
                                </div>
                                <div class="tab-pane fade" id="Additional-info" role="tabpanel"
                                    aria-labelledby="Additional-info-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            @if(!empty($product->sizes))
                                            <td style="color: #FF1C3A">Available Sizes</td>
                                            <td>{{$product->sizes}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if(!empty($product->colors))
                                            <td style="color: #FF1C3A">Availabale Color</td>
                                            <td>{{$product->colors}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if(!empty($product->laptop_compatibility))
                                            <td style="color: #FF1C3A">Laptop Compatibility</td>
                                            <td>{{$product->laptop_compatibility}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if(!empty($product->rain_cover))
                                            <td style="color: #FF1C3A">Availabale Rain Cover</td>
                                            <td>{{$product->rain_cover}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if(!empty($product->dimensions))
                                            <td style="color: #FF1C3A">Product Dimensions</td>
                                            <td>{{$product->dimensions}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @foreach ($brands as $brand)
                                            @if(!empty($product->brand_id))
                                            <td style="color: #FF1C3A">Product Brand</td>
                                            <td>{{$brand->name}}</td>
                                            @endif
                                            @endforeach
                                        </tr>
                                        
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                    <div class="comments">
                                        <h5 class="product_tab_title">2 Review For <span>{{$product->title}}</span>
                                        </h5>
                                        <ul class="list_none comment_list mt-4">
                                            <li>
                                                <div class="comment_img">
                                                    <img src="{{asset('assets/images/apex/apex-logo.webp')}}" alt="user1" />
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:100%"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta">
                                                        <span class="review_author">Mohini Karmakar</span>
                                                        <span class="comment-date">Kolkata</span> 
                                                    </p>
                                                    <div class="description">
                                                        <p>Awesome material. Its the best quality. The material in it has a fantastic quality. Most desirable by new generation. And I would recommend my colleagues to buy this. One of them asked me to give my bag but I denied. Again I can not stop my self to praise it</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment_img">
                                                    <img src="{{asset('assets/images/apex/apex-logo.webp')}}" alt="user1" />
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:100%"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta">
                                                        <span class="review_author">Kunal Sarkar</span>
                                                        <span class="comment-date">Siliguri</span> 
                                                    </p>
                                                    <div class="description">
                                                        <p>I had purchased a Apex Bags's Bagpack worth rs 1000.And iam very happy with this bag pack. I will say its better then american tourister's bagpacks.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    {{-- <div class="review_form field_form">
                                        <h5>Add a review</h5>
                                        <form class="row mt-3">
                                            <div class="form-group col-12 mb-3">
                                                <div class="star_rating">
                                                    <span data-value="1"><i class="far fa-star"></i></span>
                                                    <span data-value="2"><i class="far fa-star"></i></span>
                                                    <span data-value="3"><i class="far fa-star"></i></span>
                                                    <span data-value="4"><i class="far fa-star"></i></span>
                                                    <span data-value="5"><i class="far fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 mb-3">
                                                <textarea required="required" placeholder="Your review *"
                                                    class="form-control" name="message" rows="4"></textarea>
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <input required="required" placeholder="Enter Name *"
                                                    class="form-control" name="name" type="text">
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <input required="required" placeholder="Enter Email *"
                                                    class="form-control" name="email" type="email">
                                            </div>

                                            <div class="form-group col-12 mb-3">
                                                <button type="submit" class="btn btn-fill-out" name="submit"
                                                    value="Submit">Submit Review</button>
                                            </div>
                                        </form>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>

                
                @if (!empty($relatedProducts))

                    <div class="row">
                        <div class="col-12">
                            <div class="heading_s1">
                                <h3>Releted Products</h3>
                            </div>
                            <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20"
                                data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                
                                @foreach($relatedProducts as $relProduct) 
                                        @php
                                        $productImage = $relProduct->product_images->first();
                                        @endphp
                                    <div class="item">
                                        <div class="product">
                                            @if(!empty($productImage->image))
                                            <div class="product_img">
                                                <a href="{{route('front.product',$relProduct->slug)}}">
                                                    <img src="{{asset('uploads/product/small/'.$productImage->image)}}" alt="product_img1">
                                                </a>
                                            
                                            </div>
                                            @endif
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="{{route('front.product',$relProduct->slug)}}">{{$relProduct->title}}</a></h6>
                                                <div class="product_price">
                                                    <span class="price">₹ {{$relProduct->price}}</span>
                                                    @if($relProduct->compare_price > 0)
                                                    <del>₹ {{$relProduct->compare_price}}</del>
                                                    @endif
                                                    <div class="on_sale">
                                                        <span>{{round(($relProduct->price / $relProduct->compare_price ) *100),1}}% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:100%"></div>
                                                    </div>
                                                    {{-- <span class="rating_num">(21)</span> --}}
                                                </div>
                                                
                                                {{-- <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" >{{$relProduct->colors}}</span>
                                                       
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                @endif


            </div>
        </div>
        <!-- END SECTION SHOP -->

       

    </div>
    <!-- END MAIN CONTENT -->

@endsection