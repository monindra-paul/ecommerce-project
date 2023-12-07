 <!-- START HEADER -->
 <header class="header_wrap">

    <div class="middle-header dark_skin">
        <div class="custom-container">
            <div class="nav_block">
                <a class="navbar-brand" href="{{url('/')}}">

                    <img class="logo_dark" src="{{asset('assets/images/apex/apex-logo.webp')}}" alt="logo" width="130px" />
                </a>
                <div class="product_search_form rounded_input">
                    <form action="{{url('/shop')}}" method="get">
                        <div class="input-group">

                            <input class="form-control" name="search" placeholder="Search Product..." value="{{Request::get('search')}}" required="" type="text">
                            <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="tel:+917001639863" class="nav-link"><i class="linearicons-phone-wave"></i></i></a></li>
                    <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>
                    {{-- <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-bs-toggle="dropdown"><i class="linearicons-bag2"></i><span class="cart_count">2</span><span class="amount"><span class="currency_symbol">$</span>159.00</span></a>
                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable
                                        product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare
                                        sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View
                                        Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top border-bottom">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                    <div class="categories_wrap">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn categories_menu">
                            <span>All Categories </span><i class="linearicons-menu"></i>
                        </button>
                        <div id="navCatContent" class="navbar nav">
                            @if(!empty(getCategories()))
                            @foreach (getCategories() as $category)
                               <ul>
                                   @if($category->sub_category->isNotEmpty())
                                       <li class="dropdown dropdown-mega-menu">
                                       <a class="dropdown-item nav-link dropdown-toggler" href="{{route('front.shop',$category->slug)}}" data-bs-toggle="dropdown"><i class="linearicons-heart"></i>
                                           <span>{{$category->name}}</span></a>
                                       <div class="dropdown-menu">
                                           <ul class="mega-menu d-lg-flex">
                                               <li class="mega-menu-col col-lg-7">
                                                   @if($category->sub_category->isNotEmpty())
                                                   <ul class="d-lg-flex">
                                                       <li class="mega-menu-col col-lg-6">
                                                           <ul>
                                                               <li class="dropdown-header">Products Under {{$category->name}}</li>
                                                               @foreach($category->sub_category as $subCategory)
                                                               <li><a class="dropdown-item nav-link nav_item" href="{{route('front.shop',[$category->slug,$subCategory->slug])}}">{{$subCategory->name}}</a></li>
                                                               @endforeach
                                                           </ul>
                                                       </li>                                                        
                                                   </ul>
                                                   @endif
                                               </li>
                                              
                                           </ul>
                                       </div>
                                       </li>
                                   @else 

                                   <li><a class="dropdown-item nav-link nav_item" href="{{route('front.shop',$category->slug)}}"><i class="linearicons-heart"></i> <span>{{$category->name}}</span></a></li>
                                   @endif
                                
                                
                                
                                
                               </ul>
                            @endforeach
                            @endif
                            <div class="more_categories">More Categories</div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                   <div class="categories_wrap">
                       <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent"
                           aria-expanded="false" class="categories_btn">
                           <i class="linearicons-menu"></i><span>All Categories </span>
                       </button>
                       <div id="navCatContent" class="nav_cat navbar nav collapse">

                           @if(!empty(getCategories()))
                               @foreach (getCategories() as $category)
                                   <ul>                                      
                                       
                                       @if ($category->sub_category->isNotEmpty())
                                           <li class="dropdown dropdown-mega-menu">
                                               <a class="dropdown-item nav-link dropdown-toggler" href="{{route('front.shop',$category->slug)}}"
                                                   data-bs-toggle="dropdown"><i class="flaticon-tv"></i>
                                                   <span> {{$category->name}}</span>
                                               </a>
                                               <div class="dropdown-menu">                                                  
                                                   <ul class="mega-menu d-lg-flex">
                                                       <li class="mega-menu-col col-lg-7">
                                                           <ul class="d-lg-flex">
                                                               <li class="mega-menu-col col-lg-6">
                                                                   @if($category->sub_category->isNotEmpty())
                                                                       <ul>
                                                                           <li class="dropdown-header">Sub Category </li>
                                                                           @foreach($category->sub_category as $subCategory)
                                                                           <li><a class="dropdown-item nav-link nav_item"
                                                                                   href="{{route('front.shop',[$category->slug,$subCategory->slug])}}">{{$subCategory->name}}
                                                                               </a>
                                                                           </li>
                                                                           @endforeach                                                                    
                                                                       </ul>
                                                                   @endif
                                                               </li>                                                                
                                                           </ul>
                                                       </li>                                            
                                                   </ul>                                                
                                               </div>
                                           </li>
                                       @else
                                           <li>
                                               <a class="dropdown-item nav-link nav_item" href="{{route('front.shop',$category->slug)}}">
                                                   <i class="flaticon-headphones"></i> <span> {{$category->name}}</span>
                                               </a>
                                           </li>
                                       @endif
                                           
                                       
                                           
                                       
                                   
                                   
                                       {{-- <li>
                                           <ul class="more_slide_open">
                                               <li><a class="dropdown-item nav-link nav_item" href="login.html"><i
                                                           class="flaticon-fax"></i> <span>Fax Machine</span></a></li>
                                               <li><a class="dropdown-item nav-link nav_item" href="register.html"><i
                                                           class="flaticon-mouse"></i> <span>Mouse</span></a></li>
                                           </ul>
                                       </li> --}}
                                   </ul>

                               @endforeach
                           @endif
                           <div class="more_categories">More Categories</div>
                       </div>
                   </div>
               </div> -->
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:;" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div>
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            <ul class="navbar-nav">
                                <li class="">
                                    <a data-bs-toggle="" class="nav-link" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="">
                                    <a data-bs-toggle="" class="nav-link  " href="{{url('/categories')}}">Category</a>
                                </li>
                                <li class="">
                                    <a data-bs-toggle="" class="nav-link  " href="{{url('/shop')}}">Shop</a>
                                </li>

                                <li><a class="nav-link nav_item" href="{{url('/contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>+91 700 1639 863</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER -->