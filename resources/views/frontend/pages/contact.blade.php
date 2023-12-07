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
                        <h1>Contact</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION CONTACT -->
        <div class="section pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="contact_wrap contact_style3">
                            <div class="contact_icon">
                                <i class="linearicons-map2"></i>
                            </div>
                            <div class="contact_text">
                                <span>Address</span>
                                <p>Ramkrishna Rd, Nagarthuba
                                    Habra, West Bengal, 743271</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="contact_wrap contact_style3">
                            <div class="contact_icon">
                                <i class="linearicons-envelope-open"></i>
                            </div>
                            <div class="contact_text">
                                <span>Email Address</span>
                                <a href="mailto:info@apexbags.com
                                ">info@apexbags.com
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="contact_wrap contact_style3">
                            <div class="contact_icon">
                                <i class="linearicons-tablet2"></i>
                            </div>
                            <div class="contact_text">
                                <span>Phone</span>
                                <p>+91 7001639863</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CONTACT -->

        <!-- START SECTION CONTACT -->
        <div class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading_s1">
                            <h2>Get In touch</h2>
                        </div>
                        <p class="leads">Discover top-quality products at Apex. Shop, save, and stay updated. Your go-to destination for online shopping excellence.</p>
                        <div class="field_form">
                            <form id="contact-form" action="{{url('/contact')}}" method="post">
                                @csrf
                                <div class="row">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <div class="form-group col-md-6 mb-3">
                                        <input placeholder="Enter Name *" id="first-name" class="form-control"
                                            name="name" type="text">
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <div class="form-group col-md-6 mb-3">
                                        <input placeholder="Enter Email *" id="email" class="form-control"
                                            name="email" type="email">
                                    </div>
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                    <div class="form-group col-md-12 mb-3">
                                        <input placeholder="Enter Phone No. *" id="phone" class="form-control"
                                            name="phone">
                                    </div>
                                    @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                    <div class="form-group col-md-12 mb-3">
                                        <textarea placeholder="Message *" id="description" class="form-control"
                                            name="message" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        @if(session('success'))
                                        <div class="alert alert-success">{{session('success')}}</div>
                                        @endif
                                        <button type="submit"  class="btn btn-fill-out"
                                             >Send Message</button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58834.80558425347!2d88.62164359995921!3d22.83300120973261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8b1e74517d33d%3A0x6c7044a895e6db97!2sApex%20Bags!5e0!3m2!1sen!2sin!4v1701948449424!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CONTACT -->

      

    </div>
    <!-- END MAIN CONTENT -->

@endsection