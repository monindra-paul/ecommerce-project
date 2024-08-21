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
                        <h2 class="breadcrumb-title">ABACUS PROGRAM
                        </h2>
                        <div class="breadcrumb-list">
                            <a href="{{url('/')}}">Home</a>
                            <span>ABACUS PROGRAM</span>
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
                            <h3 class="course_details-title">Introduction of Abacus Program</h3>
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
                                        <h5><a href="#">Abacus Training</a></h5>
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
                                        <p class="mb-25">Abacus is a whole brain development program designed for the children from age of 4 to 15 years. Enroot uses the ancient tool <b> ABACUS</b> to increase speed and accuracy, Learning ability, Concentration, Perceptual capacity & Photographic Memory skills, which automatically help in all academic subjects. Here we basically focusing on mental Arithmetic as well as our value additions, viz. Fast writing, Brain Exercise and Dictation.

                                        </p>
                                        <p class="mb-40"> We use <b> ABACUS</b> as the tool and <b>ARITHMETIC</b> as the platform to enhance Concentration, Self Confidence, Fast Listening & Writing and Visualization. While Calculator needs numbers as inputs, ABACUS required children to convert the beads into numbers. And thus by arrived at a results, the brain thus gains more expertise in solving mathematical problems mentally using ABACUS.</p>
                                        <h4 class="course_details-content-title mb-20">Value Additions of this course</h4>
                                        <div class="course_details-content-list">
                                            <ul>
                                                <li>Fast Writing</li>
                                                <li>Dictation</li>
                                                <li>Brain Exercise</li>
                                            </ul>
                                        </div>
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
                                    <span>11 Levels</span>
                                </li>
                                <li>
                                    <span><i class="fa-thin fa-clock"></i>Course Duration</span>
                                    <span>44 Months</span>
                                </li>
                                <li>
                                    <span><i class="fa-thin fa-file-lines"></i>Class Frequency</span>
                                    <span>Once a week</span>
                                </li>
                                <li>
                                    <span><i class="fa-thin fa-chart-line-up"></i>Class Duration</span>
                                    <span>2 Hrs. 15 Minutes</span>
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