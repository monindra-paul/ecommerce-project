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
                        <h2 class="breadcrumb-title">Apply for Franchisee</h2>
                        <div class="breadcrumb-list">
                            <a href="{{url('/')}}">Home</a>
                            <span>Apply for Franchisee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->




    <section class="h3_admission-area pt-140 pb-90 mt-5">
        <img src="assets/img/admission/3/1.png" alt="" class="h3_admission-bg">
        <img src="assets/img/admission/3/shape-1.png" alt="" class="h3_admission-shape-1">
        <img src="assets/img/admission/3/shape-3.png" alt="" class="h3_admission-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 ">
                    <div class="h3_admission-wrap mr-65 mb-50">
                        <img src="assets/img/admission/3/shape-2.png" alt="" class="h3_admission-wrap-shape-2">
                        <div class="section-area-3 mb-35 small-section-area-3">
                            <span class="section-subtitle">Enroot Abacus  </span>
                            <h2 class="section-title mb-25">India's Fastest Growing Abacus Institute</h2>
                            <p class="section-text">
                                Apply for an abacus franchisee to leverage a proven educational method, receive comprehensive support, and tap into the growing demand for math enrichment programs.
                            </p>
                        </div>
                        <div class="h3_admission-content mb-35">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Proven Educational Method

                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Strong Brand Recognition</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Positive Community Impact</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Rising Demand for Math Education</span>
                                </div>
                            </div>
                        </div>
                        <div class="h3_admission-button">
                            <a href="#" class="theme-btn theme-btn-medium theme-btn-3">Apply Now<i class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="h3_admission-form mb-50">
                        <h5 class="h3_admission-form-title">Apply for the Enroot Franchisee</h5>
                        <form action="{{route('postfranchisee')}}" method="POST">
                            @csrf
                            <div class="row g-15">
                                <div class="col-xl-6 col-sm-6">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Name" name="name">
                                    </div>
                                </div>
                                {{-- <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div> --}}
                                <div class="col-xl-6 col-sm-6">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <div class="h3_admission-form-input">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Phone" name="mobile">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    @if ($errors->has('invpot'))
                                        <span class="text-danger">{{ $errors->first('location') }}</span>
                                    @endif
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Investment Potential" name="invpot">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="City" name="city">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    @if ($errors->has('state'))
                                        <span class="text-danger">{{ $errors->first('state') }}</span>
                                    @endif
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="State" name="state">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    @if ($errors->has('zipcode'))
                                        <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                                    @endif
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Zip Code" name="zipcode">
                                    </div>
                                </div> 
                                
                                <div class="col-xl-6 col-sm-6">
                                    @if ($errors->has('location'))
                                        <span class="text-danger">{{ $errors->first('location') }}</span>
                                    @endif
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Preffered Location" name="location">
                                    </div>
                                </div>
                                      
                                <div class="col-12">
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    <div class="h3_admission-form-btn">
                                        <button type="submit" class="theme-btn h3_admission-btn theme-btn-full theme-btn-3">Apply Now<i class="fa-light fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <span class="h3_admission-text">Courses Education Admissions</span> -->
    </section>







@endsection