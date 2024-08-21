@extends('frontend.layout.app')
@section('content')


<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
        <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title">Our Presence</h2>
                        <div class="breadcrumb-list">
                            <a href="{{url('/')}}">Home</a>
                            <span>Our Presence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->


   
    <section class="h5_event-area pt-135 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-area-5 text-center mb-60">
                        <span class="section-subtitle">Our Presence</span>
                        <h2 class="section-title mb-0">Our Presence</h2>
                    </div>
                </div>
            </div>
          
            <div class="row g-0">
                <div class="col-xl-7">

                    <marquee scrollamount="11" behavior="scroll" direction="up" height="500px">
                        <div class="h5_event-wrap">
                            @foreach ($presences as $presence)

                                
                           
                            <div class="h5_event-item">
                                <div class="h5_event-item-date p-3">
                                    <h4>{{$presence->name}}
                                    </h4>
                                
                                </div>
                                <div class="h5_event-item-content pt-4 pb-4">
                                    <ul>
                                        {{-- <li><a href="#"><i class="fa-light fa-location-dot"></i>London, US</a></li> --}}
                                    </ul>
                                    <h5><a href="#">{{$presence->location}}, {{$presence->state}}                              </a></h5>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </marquee>
                </div>
                <div class="col-xl-5">
                    <div class="h5_event-img w_img">
                        <img src="assets/img/event/5/1.jpg" alt="">
                    </div>
                </div>
            </div>
       
        </div>
    </section>


    <!-- contact area start -->
    <section class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="contact-wrap">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="contact-content pr-80 mb-20">
                            <h3 class="contact-title mb-25">Send Us a Message</h3>
                            <form action="{{url('/our-presence')}}" method="post" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                            <input type="text" placeholder="Your Name" name="name">
                                            <span class="inner-icon"><i class="fa-thin fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                            <input type="email" placeholder="Email Address" name="email">
                                            <span class="inner-icon"><i class="fa-thin fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-form-input mb-30">
                                            @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                            <input type="text" placeholder="Your Number" name="phone">
                                            <span class="inner-icon"><i class="fa-thin fa-phone-volume"></i></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="contact-form-input mb-50 contact-form-textarea">
                                            @if ($errors->has('message'))
                                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                            @endif
                                            <textarea name="message" cols="30" rows="10"
                                                placeholder="Feel free to get in touch!" name="message"></textarea>
                                            <span class="inner-icon"><i class="fa-thin fa-pen"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-form-submit mb-30">
                                            <div class="contact-form-btn">
                                                <button type="submit" class="theme-btn contact-btn">Send Message</button>
                                            </div>
                                           
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="col-xl-4 col-md-4">
                        <div class="contact-info ml-50 mb-20">
                            <h3 class="contact-title mb-40">Get In Touch</h3>
                            <div class="contact-info-item">
                                <span><i class="fa-thin fa-location-dot"></i>Address</span>
                                <p>5/H/11, Gagan Sarkar Road,
                                    Beleghata, Kolkata- 700010</p>
                            </div>
                            <div class="contact-info-item">
                                <span><i class="fa-thin fa-mobile-notch"></i>Phone</span>
                                <a href="tel:+919836009339">+91 9836009339</a>
                            </div>
                            <div class="contact-info-item">
                                <span><i class="fa-thin fa-envelope"></i>Email</span>
                                <a href="mailto:enrootabacus@gmail.com">enrootabacus@gmail.com</a>
                            </div>
                            <!-- <div class="contact-social">
                                <span>Social Media</span>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d147120.012062842!2d13.706000467398074!3d51.075159941942076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1senveto!5e0!3m2!1sen!2sbd!4v1680961754336!5m2!1sen!2sbd"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- contact area end -->


</main>


@endsection