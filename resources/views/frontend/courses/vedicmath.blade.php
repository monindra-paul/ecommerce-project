@extends('frontend.layout.app')
@section('content')
<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg-default" data-background="{{asset('assets/img/breadcrumb/breadcrumb-bg.jpg')}}">
        <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title">VEDIC MATHEMATICS

                        </h2>
                        <div class="breadcrumb-list">
                            <a href="{{url('/')}}">Home</a>
                            <span>VEDIC MATHEMATICS
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- course details area start -->
    <section class="course_details-area pt-120 pb-60">
        <div class="container">
            <div class="course_details-img">
                <img src="{{asset('assets/img/course/details/1.jpg')}}" alt="">
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="course_details-wrap mb-55">
                        <div class="course_details-top mb-60">
                            <h3 class="course_details-title">VEDIC MATHEMATICS
                            </h3>
                            <div class="course_details-meta">
                                <div class="course_details-meta-left">
                                    <div class="course_details-author">
                                        <div class="course_details-author-img">
                                            <img src="{{asset('assets/img/enroot/enrootlogo.png')}}" alt="">
                                        </div>
                                        <div class="course_details-author-info">
                                            <span>Teacher</span>
                                            <h5><a href="{{url('/')}}">Enroot Abacus</a></h5>
                                        </div>
                                    </div>
                                    <div class="course_details-category">
                                        <span>Categories</span>
                                        <h5><a href="#">Vedic Mathematics
                                        </a></h5>
                                    </div>
                                    <div class="course_details-rating">
                                        <span>Review</span>
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="course_details-meta-right">
                                    <a href="#" class="theme-btn theme-btn-medium">Free</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="course_details-tab-button">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa-solid fa-bookmark"></i><span>Overview</span></button>
                                </li>
                                    
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false"><i class="fa-thin fa-message-dots"></i><span>Reviews</span></button>
                                </li>
                            </ul>
                        </div>
                        <div class="course_details-tab-content"> 
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="course_details-content">
                                        <h4 class="course_details-content-title mb-15">Courses Description</h4>
                                        <p class="mb-25"><b>Ved Mathematics</b> is a brain development program for the age group of 13-25 years, which includes MENTAL MATHS derived from Vedic system with some value additions like SPEED MATHS, APTITUDE TEST & REASONING. The program is most suitable for this age group because in this periods when the teenagers face the challenge to appear in the Talent Search and Entrance Examinations Ved Mathematics helps them most.


                                        </p>
                                        <p class="mb-40"><b> Ved Mathematics</b> mental or one or two line methods can be used effectively for solving divisions, reciprocals, factorization, HCF, square roots, cube and cubic roots, algebraic equations, multiple simultaneous equations, quadratic equations, cubic equations, bi-quadratic equations, higher degree equations, Partial fractions, differential calculus, Integrations, Pythagoras theorem, Analytical Concis and so on. Even NASA Scientists applied its principles in the area of altricial intelligence. Ved Mathematics grows an interest for numbers and eliminates the math-phobia presents in the students' mind. It encourages mental calculations and it is the best exercise for Brain. Ved Mathematics also gives students a set of checking procedures for independent cross-checking of whatever they calculate</p>
                                        {{-- <h4 class="course_details-content-title mb-20">Value Additions of this course</h4>
                                        <div class="course_details-content-list">
                                            <ul>
                                                <li>Fast Writing</li>
                                                <li>Dictation</li>
                                                <li>Brain Exercise</li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            
                                <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab" tabindex="0">
                                    <div class="course_details-review">
                                        <h4 class="course_details-review-title">Student Ratings &amp; Reviews</h4>
                                        <div class="course_details-review-wrap">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="course_details-review-left">
                                                        <h5>5.0</h5>
                                                        <ul>
                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                        </ul>
                                                        <p>(4 Reviews)</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="course_details-review-content">
                                                        <ul>
                                                            <li>
                                                                <span class="review-rating">5 <i class="fa-solid fa-star"></i></span>
                                                                <span class="review-progress-bar"></span>
                                                                <span class="review-rating-count">1</span>
                                                            </li>
                                                            <li>
                                                                <span class="review-rating">4 <i class="fa-solid fa-star"></i></span>
                                                                <span class="review-progress-bar"></span>
                                                                <span class="review-rating-count">3</span>
                                                            </li>
                                                            <li>
                                                                <span class="review-rating">5 <i class="fa-solid fa-star"></i></span>
                                                                <span class="review-progress-bar"></span>
                                                                <span class="review-rating-count">0</span>
                                                            </li>
                                                            <li>
                                                                <span class="review-rating">5 <i class="fa-solid fa-star"></i></span>
                                                                <span class="review-progress-bar"></span>
                                                                <span class="review-rating-count">0</span>
                                                            </li>
                                                            <li>
                                                                <span class="review-rating">5 <i class="fa-solid fa-star"></i></span>
                                                                <span class="review-progress-bar"></span>
                                                                <span class="review-rating-count">0</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="course_details-sidebar mb-60">
                        {{-- <div class="course_details-price">
                            <del>$36.00</del>
                            <h2>$28.00</h2>
                        </div> --}}
                        <div class="course_details-list">
                            <ul>
                                <li>
                                    <span><i class="fa-thin fa-user-group"></i>Total Level</span>
                                    <span>2 Levels</span>
                                </li>
                                <li>
                                    <span><i class="fa-thin fa-clock"></i>Course Duration</span>
                                    <span>12 Months</span>
                                </li>
                                <li>
                                    <span><i class="fa-thin fa-file-lines"></i>Class Frequency</span>
                                    <span>Once a week</span>
                                </li>
                                <li>
                                    <span><i class="fa-thin fa-chart-line-up"></i>Class Duration</span>
                                    <span>2 Hrs.</span>
                                </li>
                                <li>
                                    <span><i class="fa-thin fa-language"></i>Language</span>
                                    <span>English</span>
                                </li>
                               
                            </ul>
                            <div class="course_details-sidebar-btn">
                                <a href="#" class="course-btn theme-btn theme-btn-big">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course details area end -->

</main>
@endsection