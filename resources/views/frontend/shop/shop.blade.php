@extends('frontend.layout.app')
@section('content')

<main>

   <!-- breadcrumb area start -->
   <section class="breadcrumb__area include-bg pt-100 pb-50 text-center">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content p-relative z-index-1">
                  <h3 class="breadcrumb__title">Shop</h3>
                  <div class="breadcrumb__list">
                     <span><a href="#">Home</a></span>
                     <span>Shop</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->

   <!-- shop area start -->
   <section class="tp-shop-area pb-120">
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-4">
               <div class="tp-shop-sidebar mr-10">
                  <!-- filter -->
                  <div class="tp-shop-widget mb-35">
                     <h3 class="tp-shop-widget-title no-border">Price Filter</h3>

                     <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-filter">
                           <div id="slider-range" class="mb-10"></div>
                           <div class="tp-shop-widget-filter-info d-flex align-items-center justify-content-between">
                              <span class="input-range">
                                 <input type="text" id="amount" readonly>
                              </span>
                              <button class="tp-shop-widget-filter-btn" type="button">Filter</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- status -->
                  <div class="tp-shop-widget mb-50">
                     <h3 class="tp-shop-widget-title">Product Status</h3>

                     <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-checkbox">
                           <ul class="filter-items filter-checkbox">
                              <li class="filter-item checkbox">
                                 <input id="on_sale" type="checkbox">
                                 <label for="on_sale">On sale</label>
                              </li>
                              <li class="filter-item checkbox">
                                 <input id="in_stock" type="checkbox">
                                 <label for="in_stock">In Stock</label>
                              </li>
                           </ul><!-- .filter-items -->
                        </div>
                     </div>
                  </div>
                  <!-- categories -->
                  @if($categories->isNotEmpty())
                  <div class="tp-shop-widget mb-50">
                     <h3 class="tp-shop-widget-title">Categories</h3>
                     <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-categories">
                           <ul>
                              @foreach ($categories as $category)
                              <li><a href="{{route('front.shop',$category->slug)}}">{{$category->name}}<span>18</span></a></li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                  </div>
                  @endif


                  <!-- color -->
                  {{-- <div class="tp-shop-widget mb-50">
                     <h3 class="tp-shop-widget-title">Filter by Color</h3>
                     <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-checkbox-circle-list">
                           <ul>
                              <li>
                                 <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="red">
                                    <label for="red">Red</label>
                                    <span data-bg-color="#FF401F" class="tp-shop-widget-checkbox-circle-self"></span>
                                 </div>
                                 <span class="tp-shop-widget-checkbox-circle-number">8</span>
                              </li>
                              <li>
                                 <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="dark_blue">
                                    <label for="dark_blue">Dark Blue</label>
                                    <span data-bg-color="#4666FF" class="tp-shop-widget-checkbox-circle-self"></span>
                                 </div>
                                 <span class="tp-shop-widget-checkbox-circle-number">14</span>
                              </li>
                              <li>
                                 <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="oragnge">
                                    <label for="oragnge">Orange</label>
                                    <span data-bg-color="#FF9E2C" class="tp-shop-widget-checkbox-circle-self"></span>
                                 </div>
                                 <span class="tp-shop-widget-checkbox-circle-number">18</span>
                              </li>
                              <li>
                                 <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="purple">
                                    <label for="purple">Purple</label>
                                    <span data-bg-color="#B615FD" class="tp-shop-widget-checkbox-circle-self"></span>
                                 </div>
                                 <span class="tp-shop-widget-checkbox-circle-number">23</span>
                              </li>
                              <li>
                                 <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="yellow">
                                    <label for="yellow">Yellow</label>
                                    <span data-bg-color="#FFD747" class="tp-shop-widget-checkbox-circle-self"></span>
                                 </div>
                                 <span class="tp-shop-widget-checkbox-circle-number">17</span>
                              </li>
                              <li>
                                 <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="green">
                                    <label for="green">Green</label>
                                    <span data-bg-color="#41CF0F" class="tp-shop-widget-checkbox-circle-self"></span>
                                 </div>
                                 <span class="tp-shop-widget-checkbox-circle-number">15</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- product rating -->
                  <div class="tp-shop-widget mb-50">
                     <h3 class="tp-shop-widget-title">Top Rated Products</h3>

                     <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-product">
                           <div class="tp-shop-widget-product-item d-flex align-items-center">
                              <div class="tp-shop-widget-product-thumb">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/shop/sm/shop-sm-1.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-shop-widget-product-content">
                                 <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                    <div class="tp-shop-widget-product-rating">
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-shop-widget-product-rating-number">
                                       <span>(4.2)</span>
                                    </div>
                                 </div>
                                 <h4 class="tp-shop-widget-product-title">
                                    <a href="product-details.html">Smart watches wood...</a>
                                 </h4>
                                 <div class="tp-shop-widget-product-price-wrapper">
                                    <span class="tp-shop-widget-product-price">$150.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-shop-widget-product-item d-flex align-items-center">
                              <div class="tp-shop-widget-product-thumb">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/shop/sm/shop-sm-2.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-shop-widget-product-content">
                                 <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                    <div class="tp-shop-widget-product-rating">
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-shop-widget-product-rating-number">
                                       <span>(4.5)</span>
                                    </div>
                                 </div>
                                 <h4 class="tp-shop-widget-product-title">
                                    <a href="product-details.html">Decoration for panda.</a>
                                 </h4>
                                 <div class="tp-shop-widget-product-price-wrapper">
                                    <span class="tp-shop-widget-product-price">$120.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-shop-widget-product-item d-flex align-items-center">
                              <div class="tp-shop-widget-product-thumb">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/shop/sm/shop-sm-3.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-shop-widget-product-content">
                                 <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                    <div class="tp-shop-widget-product-rating">
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-shop-widget-product-rating-number">
                                       <span>(3.5)</span>
                                    </div>
                                 </div>
                                 <h4 class="tp-shop-widget-product-title">
                                    <a href="product-details.html">Trending Watch for Man</a>
                                 </h4>
                                 <div class="tp-shop-widget-product-price-wrapper">
                                    <span class="tp-shop-widget-product-price">$99.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-shop-widget-product-item d-flex align-items-center">
                              <div class="tp-shop-widget-product-thumb">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/shop/sm/shop-sm-4.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-shop-widget-product-content">
                                 <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                    <div class="tp-shop-widget-product-rating">
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                       <span>
                                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                fill="currentColor" />
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-shop-widget-product-rating-number">
                                       <span>(4.8)</span>
                                    </div>
                                 </div>
                                 <h4 class="tp-shop-widget-product-title">
                                    <a href="product-details.html">Minimal Backpack.</a>
                                 </h4>
                                 <div class="tp-shop-widget-product-price-wrapper">
                                    <span class="tp-shop-widget-product-price">$165.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- brand -->
                  <div class="tp-shop-widget mb-50">
                     <h3 class="tp-shop-widget-title">Popular Brands</h3>

                     <div class="tp-shop-widget-content ">
                        <div
                           class="tp-shop-widget-brand-list d-flex align-items-center justify-content-between flex-wrap">
                           <div class="tp-shop-widget-brand-item">
                              <a href="#">
                                 <img src="assets/img/product/shop/brand/logo_01.png" alt="">
                              </a>
                           </div>
                           <div class="tp-shop-widget-brand-item">
                              <a href="#">
                                 <img src="assets/img/product/shop/brand/logo_02.png" alt="">
                              </a>
                           </div>
                           <div class="tp-shop-widget-brand-item">
                              <a href="#">
                                 <img src="assets/img/product/shop/brand/logo_03.png" alt="">
                              </a>
                           </div>
                           <div class="tp-shop-widget-brand-item">
                              <a href="#">
                                 <img src="assets/img/product/shop/brand/logo_04.png" alt="">
                              </a>
                           </div>
                           <div class="tp-shop-widget-brand-item">
                              <a href="#">
                                 <img src="assets/img/product/shop/brand/logo_05.png" alt="">
                              </a>
                           </div>
                           <div class="tp-shop-widget-brand-item">
                              <a href="#">
                                 <img src="assets/img/product/shop/brand/logo_06.png" alt="">
                              </a>
                           </div>
                           <div class="tp-shop-widget-brand-item">
                              <a href="#">
                                 <img src="assets/img/product/shop/brand/logo_07.png" alt="">
                              </a>
                           </div>
                           <div class="tp-shop-widget-brand-item">
                              <a href="#">
                                 <img src="assets/img/product/shop/brand/logo_08.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div> --}}


               </div>
            </div>
            <div class="col-xl-9 col-lg-8">
               <div class="tp-shop-main-wrapper">


                  <div class="tp-shop-items-wrapper tp-shop-item-primary">
                     <div class="tab-content" id="productTabContent">
                        <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel"
                           aria-labelledby="grid-tab" tabindex="0">
                           <div class="row infinite-container">


                              @if($products->isNotEmpty())
                              @foreach($products as $product)
                              @php
                              $productImage = $product->product_images->first();
                              @endphp


                              <div class="col-xl-3 col-md-6 col-sm-6 infinite-item">
                                 <div class="tp-product-item-2 mb-40">

                                    <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                                       <!-- product action -->
                                       @if(!empty($productImage->image))
                                       <a href="product-details.html">
                                          <img src="{{asset('uploads/product/small/'.$productImage->image)}}"
                                             alt="product-apex-bag">
                                       </a>
                                       @else
                                       <a href="product-details.html">
                                          <img src="{{asset('admin/img/product-1.jpg')}}" alt="product-electronic">
                                       </a>
                                       @endif
                                    </div>

                                    <div class="tp-product-content-2 pt-15">
                                       <div class="tp-product-tag-2">
                                          {{-- <a href="#">{{$product->category_id}}</a> --}}
                                       </div>
                                       <h3 class="tp-product-title-2">
                                          <a href="product-details.html">{{$product->title}}</a>
                                       </h3>
                                       <div class="tp-product-rating-icon tp-product-rating-icon-2">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                       </div>
                                       <div class="tp-product-price-wrapper-2">
                                          <span class="tp-product-price-2 new-price"> ₹ {{$product->price}}</span>
                                          @if($product->compare_price > 0)
                                          <span class="tp-product-price-2 old-price">₹
                                             {{$product->compare_price}}</span>

                                          @endif
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              @endforeach
                              @endif



                           </div>
                        </div>

                     </div>
                  </div>
                  {{$products->links()}}
                  {{-- <div class="infinite-pagination d-none">
                     <a href="shop.html" class="infinite-next-link">Next</a>
                  </div>
                  <div class="tp-shop-pagination mt-20">
                     <div class="tp-pagination">
                        <nav>
                           <ul>
                              <li>
                                 <a href="shop.html" class="tp-pagination-prev prev page-numbers">
                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor"
                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </li>
                              <li>
                                 <a href="shop.html">1</a>
                              </li>
                              <li>
                                 <span class="current">2</span>
                              </li>
                              <li>
                                 <a href="shop.html">3</a>
                              </li>
                              <li>
                                 <a href="shop.html" class="next page-numbers">
                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor"
                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div> --}}
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- shop area end -->

</main>


@endsection