<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Apex Bags - Ecommerce Website</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/favicon.png')}}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/font-awesome-pro.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/flaticon_shofy.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


   <!-- pre loader area start -->

   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- offcanvas area start -->
   <div class="offcanvas__area offcanvas__radius">
      <div class="offcanvas__wrapper">
         <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
               <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
                  <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
               </svg>
            </button>
         </div>
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo logo">
                  <a href="index.html">
                     <img src="{{asset('assets/img/apex/apex-logo.png')}}" alt="logo" width="65px">
                  </a>
               </div>
            </div>
            <div class="offcanvas__category pb-40">
               <button class="tp-offcanvas-category-toggle">
                  <i class="fa-solid fa-bars"></i>
                  All Categories
               </button>
               <div class="tp-category-mobile-menu">

               </div>
            </div>
            <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

            <div class="offcanvas__contact align-items-center d-none">
               <div class="offcanvas__contact-icon mr-20">
                  <span>
                     <img src="assets/img/icon/contact.png" alt="">
                  </span>
               </div>
               <div class="offcanvas__contact-content">
                  <h3 class="offcanvas__contact-title">
                     <a href="tel:098-852-987">004524865</a>
                  </h3>
               </div>
            </div>
            <div class="offcanvas__btn">
               <a href="contact.html" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
            </div>
         </div>

      </div>
   </div>
   <!-- <div class="body-overlay"></div> -->
   <!-- offcanvas area end -->

   <!-- mobile menu area start -->
   <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
      <div class="container">
         <div class="row row-cols-5">
            <div class="col">
               <div class="tp-mobile-item text-center">
                  <a href="shop.html" class="tp-mobile-item-btn">
                     <i class="flaticon-store"></i>
                     <span>Store</span>
                  </a>
               </div>
            </div>
            <div class="col">
               <div class="tp-mobile-item text-center">
                  <button class="tp-mobile-item-btn tp-search-open-btn">
                     <i class="flaticon-search-1"></i>
                     <span>Search</span>
                  </button>
               </div>
            </div>
            <div class="col">
               <div class="tp-mobile-item text-center">
                  <a href="wishlist.html" class="tp-mobile-item-btn">
                     <i class="flaticon-love"></i>
                     <span>Wishlist</span>
                  </a>
               </div>
            </div>
            <div class="col">
               <div class="tp-mobile-item text-center">
                  <a href="profile.html" class="tp-mobile-item-btn">
                     <i class="flaticon-user"></i>
                     <span>Account</span>
                  </a>
               </div>
            </div>
            <div class="col">
               <div class="tp-mobile-item text-center">
                  <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                     <i class="flaticon-menu-1"></i>
                     <span>Menu</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- mobile menu area end -->

   <!-- search area start -->
   <section class="tp-search-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="tp-search-form">
                  <div class="tp-search-close text-center mb-20">
                     <button class="tp-search-close-btn tp-search-close-btn"></button>
                  </div>
                  <form action="#">
                     <div class="tp-search-input mb-10">
                        <input type="text" placeholder="Search for product...">
                        <button type="submit"><i class="flaticon-search-1"></i></button>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- search area end -->

   <!-- cart mini area start -->

   <!-- cart mini area end -->

   <!-- header area start -->
   <header>
      <div class="tp-header-area p-relative z-index-11">
         <!-- header top start  -->


         <!-- header main start -->
         <div class="tp-header-main tp-header-sticky">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                     <div class="logo">
                        <a href="{{url('/')}}">
                           <img src="{{asset('assets/img/apex/apex-logo.png')}}" alt="logo" width="100px">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                     <div class="tp-header-search ">
                        <form action="#">
                           <div class="tp-header-search-wrapper d-flex align-items-center">
                              <div class="tp-header-search-box">
                                 <input type="text" placeholder="Search for Products...">
                              </div>

                              <div class="tp-header-search-btn">
                                 <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                     <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                        <div class="tp-header-action d-flex align-items-center ml-50">
                           <div class="tp-header-action-item d-none d-lg-block">
                              <div class="tp-header-contact-icon">
                                 <span>
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                 </span>
                              </div>
                              <div class="tp-header-contact-content">
                                 <h5>Hotline:</h5>
                                 <p><a href="tel:402-763-282-46">+(402) 763 282 46</a></p>
                              </div>
                           </div>

                           <div class="tp-header-action-item d-lg-none">
                              <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                    <rect x="10" width="20" height="2" fill="currentColor" />
                                    <rect x="5" y="7" width="25" height="2" fill="currentColor" />
                                    <rect x="10" y="14" width="20" height="2" fill="currentColor" />
                                 </svg>
                              </button>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- header bottom start -->
         <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
            <div class="container">
               <div class="tp-mega-menu-wrapper p-relative">
                  <div class="row align-items-center">
                     <div class="col-xl-3 col-lg-3">
                        <div class="tp-header-category tp-category-menu tp-header-category-toggle">
                           <button class="tp-category-menu-btn tp-category-menu-toggle">
                              <span>
                                 <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 1C0 0.447715 0.447715 0 1 0H15C15.5523 0 16 0.447715 16 1C16 1.55228 15.5523 2 15 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H11C11.5523 14 12 13.5523 12 13C12 12.4477 11.5523 12 11 12H1Z"
                                       fill="currentColor" />
                                 </svg>
                              </span>
                              All Categories
                           </button>
                           <nav class="tp-category-menu-content">
                              <ul>
                                 <li>
                                    <a href="shop.html">
                                       <span>
                                          <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                          </svg>
                                       </span>
                                       New Arrivals</a>
                                 </li>

                                 @if(!empty(getCategories()))
                                 @foreach (getCategories() as $category)

                                 @if ($category->sub_category->isNotEmpty())
                                 <li class="has-dropdown">
                                    <a href="shop.html">
                                       <span>
                                          <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M14.5 1H2.5C1.67157 1 1 1.67157 1 2.5V10C1 10.8284 1.67157 11.5 2.5 11.5H14.5C15.3284 11.5 16 10.8284 16 10V2.5C16 1.67157 15.3284 1 14.5 1Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                             <path d="M5.5 14.5H11.5" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.5 11.5V14.5" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </span>
                                       {{$category->name}}
                                    </a>
                                    @if($category->sub_category->isNotEmpty())
                                    <ul class="tp-submenu">
                                       @foreach($category->sub_category as $subCategory)
                                       <li><a href="shop.html">{{$subCategory->name}}</a></li>
                                       @endforeach
                                    </ul>
                                    @endif

                                 </li>
                                 @else
                                 <li class="">
                                    <a href="shop.html">
                                       <span>
                                          <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M14.5 1H2.5C1.67157 1 1 1.67157 1 2.5V10C1 10.8284 1.67157 11.5 2.5 11.5H14.5C15.3284 11.5 16 10.8284 16 10V2.5C16 1.67157 15.3284 1 14.5 1Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                             <path d="M5.5 14.5H11.5" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.5 11.5V14.5" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </span>
                                       {{$category->name}}
                                    </a>
                                    @if($category->sub_category->isNotEmpty())
                                    <ul class="tp-submenu">
                                       @foreach($category->sub_category as $subCategory)
                                       <li><a href="shop.html">{{$subCategory->name}}</a></li>
                                       @endforeach
                                    </ul>
                                    @endif

                                 </li>
                                 @endif

                                 @endforeach
                                 @endif

                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6">
                        <div class="main-menu menu-style-1">
                           <nav class="tp-main-menu-content">
                              <ul>
                                 <li class="">
                                    <a href="{{url('/')}}">Home</a>
                                 </li>

                                 <li><a href="{{url('/categories')}}">Categories</a></li>
                                 <li><a href="{{url('/shop')}}">Shop</a></li>
                                 <li><a href="contact.html">Contact</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->

   <div id="header-sticky-2" class="tp-header-sticky-area">
      <div class="container">
         <div class="tp-mega-menu-wrapper p-relative">
            <div class="row align-items-center">
               <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                  <div class="logo">
                     <a href="index.html">
                        <img src="{{asset('assets/img/apex/apex-logo.png')}}" alt="logo" width="75px">
                     </a>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                  <div class="tp-header-sticky-menu main-menu menu-style-1">
                     <nav id="mobile-menu">
                        <ul>
                           <li class="">
                              <a href="{{url('/')}}">Home</a>

                           </li>
                           <li><a href="{{url('/categories')}}">Categories</a></li>
                           <li><a href="{{url('/shop')}}">Shop</a></li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                  <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
                     <div class="tp-header-action-item d-none d-lg-block">
                        <div class="tp-header-contact-icon">
                           <span>
                              <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </span>
                        </div>
                        <div class="tp-header-contact-content">
                           <h5>Hotline:</h5>
                           <p><a href="tel:402-763-282-46">+(402) 763 282 46</a></p>
                        </div>
                     </div>
                     <div class="tp-header-action-item d-lg-none">
                        <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                              <rect x="10" width="20" height="2" fill="currentColor" />
                              <rect x="5" y="7" width="25" height="2" fill="currentColor" />
                              <rect x="10" y="14" width="20" height="2" fill="currentColor" />
                           </svg>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>