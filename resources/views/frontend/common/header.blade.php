
        <!-- header area start -->
        <header> 
            <div class="h3_header-area header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-sm-7 col-6">
                            <div class="h3_header-logo">
                                <a href="{{url('/')}}"><img src="{{asset('assets/img/enroot/enrootlogo.png')}}" alt="" width="85px"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 d-none d-xl-block">
                            <div class="">
                                <nav class="h3_main-menu mobile-menu" id="mobile-menu">
                                    <ul>
                                        <li class="">
                                            <a href="{{url('/')}}">Home</a>                                            
                                        </li>
                                        <li class="">
                                            <a href="{{url('/about-us')}}">About Us</a>                                            
                                        </li>
                                        <li class="menu-has-child">
                                            <a href="#">Courses</a>
                                            <ul class="submenu">
                                                <li><a href="{{route('course.abacus')}}">Abacus</a></li>
                                                <li><a href="{{route('course.vedicmath')}}">Vedic Math</a></li>
                                                <li><a href="#">Chess</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-has-child">
                                            <a href="#">Career Opportunities</a>
                                            <ul class="submenu">
                                                <li><a href="{{route('franchise.career')}}">Franchisee Career</a></li>
                                                <li><a href="{{route('career.oppor')}}">Career Opportunities</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/events')}}">Events</a></li>
                                        <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                        <li><a href="{{url('/our-presence')}}">Our Presence</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-5 col-6">
                            <div class="h3_header-right">
                                {{-- <div class="h3_header-btn d-none d-sm-block">
                                    <a href="#" class="header-btn theme-btn theme-btn-medium theme-btn-3">Student Query<i class="fa-light fa-arrow-up-right"></i></a>
                                </div> --}}
                                <div class="h3_header-btn d-none d-sm-block">
                                    <a href="{{url('/apply-franchise')}}" class="header-btn theme-btn theme-btn-medium theme-btn-3">Franchisee Query<i class="fa-light fa-arrow-up-right"></i></a>
                                </div>
                                <div class="header-menu-bar d-xl-none ml-10">
                                    <span class="header-menu-bar-icon side-toggle">
                                        <i class="fa-light fa-bars"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->