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
                        <h2 class="breadcrumb-title">About Us</h2>
                        <div class="breadcrumb-list">
                            <a href="{{url('/')}}">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- teacher details area start -->
    <section class="teacher_details-area pt-120 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="teacher_details-img w_img mb-50">
                        <img src="assets/img/enroot/suk.jpg" alt="" style="border-radius:10px">
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="teacher_details-content mb-50">
                        <div class="teacher_details-admin">
                            <h4 class="teacher_details-title">Mr. Suklambar Mitra</h4>
                            <span>Executive Director, Enroot Abacus Pvt. Ltd.</span>
                        </div>

                        {{-- <h5 class="teacher_details-title2">About Me</h5> --}}
                        <p class="mb-20">The aim of education is to enlighten one's mind so that one could have a broad
                            mind as well as a broad outlook. Education represents the truth of life in a beautiful way
                            for the well being of human race. The truth of life is imparted to students as the essence
                            of knowledge. Children are made not only professionally perfect but also morally sound to
                            follow the path of truth by which they not only overcome complicated problems but also
                            morally sound to follow the path of truth by which they not only overcome complicated
                            problems but also taste the nectar of success in life.
                            <br>
                            We Enroot Abacus Pvt. Ltd. uphold the ethos and values of Ancient Indian Mathematics
                            interacted with the science, knowledge and technology leading to creation of fastest
                            cumulative students who could perform at any circumstances. By offering effective mentoring,
                            psychometric analysis, visualization practices, and focussed attention on every individual
                            student by faculty members of EAPL. We ensure to highlight potential to each individual
                            student and prepare them to cope up with the high level of performance in the contemporary
                            stressful competitive world. We inculcate in the students the habit of lateral and
                            innovative thinking, improves concentration, visualization, fast writing capacity,
                            analytical power, creativity decision making capability along with nurturing and developing
                            physical and mental strength to sustain and excel under any situation.
                        </p>



                    </div>
                </div>


            </div>
            <div class="row">
                <p>

                    Our faculty members are young and enrich of corporate world experience backed by excellent academic
                    expertise. We are not only focussed to ABACUS & VEDIC Mathematics but also looking after for
                    improving soft skill such as spoken English, body posture, stress management, dressing, voice
                    modulation, transaction analysis, presentation skills etc of our students.
                    We are continuing our journey with a vision for imparting skill training of ABACUS for youth which
                    will enable the students to compete with the fast growing competitive world in education, overall
                    emphasizing for their whole brain development.
                    <br>
                    We are also determined to create a network of 1000 centers with 200+ Schools along with 1 lac
                    students by 2025 globally as we are believing in Ideology of Swami Vivekananda i.e Spreading
                    Education worldwide...
                    <br>
                    "A Nation is advanced in proportion to education and intelligence spread among the masses"

                </p>

                {{-- <h5 class="teacher_details-title2">Contact Me</h5>
                <div class="teacher_details-info">
                    <ul>
                        <li><span>Address:</span>Hilton Conference Centre</li>
                        <li><span>Email:</span><a href="mailto:Example@gmail.com">Example@gmail.com</a></li>
                        <li><span>Phone:</span><a href="tel:+123548645850">+123 548 6458 50</a></li>
                    </ul>
                    <div class="teacher_details-social">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- teacher details area end -->



    <!-- feature area start -->
    <section class="h5_feature-area">
        <div class="h5_feature-wrapper ">
            <div class="h5_feature-item first_item">
                <div class="h5_feature-inner pl-5">
                    <span>01</span>
                    <h3>Mission</h3>
                    <p>Our Mission is to guide Children amidst the changing landscape of Indian Education, Boost their
                        Brain Power and Make Them Genius.

                    </p>
                    {{-- <a href="#">View Course<svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                            viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path
                                    d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                                    fill="#000000" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg></a> --}}
                </div>
            </div>

            <div class="h5_feature-item second_item swiper">
                <div class="swiper-wrapper ">
                    <div class="h5_feature-inner swiper-slide">
                        <span>02</span>
                        <h3>Vision</h3>
                        <p>To become the chief provider of highly effective and innovative educational program.

                        </p>

                        <a href="#" id="swiper-button-next">Next<svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg></a>

                    </div>


                    <div class="h5_feature-inner swiper-slide ">
                        <span>02</span>
                        <h3>Vision</h3>
                        <p>Set benchmarks in developing program for child development.
                        </p>
                        <a href="#" id="swiper-button-next">Next<svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg></a>
                        <a href="#" id="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0"
                                viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            Previous</a>


                    </div>

                    <div class="h5_feature-inner swiper-slide ">
                        <span>02</span>
                        <h3>Vision</h3>
                        <p>Development of Human Intellect, through improved Mind Concentration, Imagination and Memory.

                        </p>
                        <a href="#" id="swiper-button-next">Next<svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg></a>
                        <a href="#" id="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0"
                                viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            Previous</a>


                    </div>

                    <div class="h5_feature-inner swiper-slide ">
                        <span>02</span>
                        <h3>Vision</h3>
                        <p>Development of Reasoning Capability, Judgement and Application of Concepts in the young
                            Indians.



                        </p>
                        <a href="#" id="swiper-button-next">Next<svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg></a>
                        <a href="#" id="swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0"
                                viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>Previous</a>


                    </div>

                    <div class="h5_feature-inner swiper-slide ">
                        <span>02</span>
                        <h3>Vision</h3>
                        <p>Generation of large scale employment opportunities.

                        </p>
                        <a href="#" id="swiper-button-next">Next<svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg></a>
                        <a href="#" id="swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0"
                                viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>Previous</a>


                    </div>

                    <div class="h5_feature-inner swiper-slide ">
                        <span>02</span>
                        <h3>Vision</h3>
                        <p>Revolutionize the field of Child Education. Help unleash the hidden potential of children and
                            thereby help to build a promising tomorrow for the Nation.

                        </p>
                        <a href="#" id="swiper-button-next">Next<svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg></a>
                        <a href="#" id="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0"
                                viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"
                                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>Previous</a>


                    </div>

                </div>
            </div>
            <div class="h5_feature-item w_img third_item">
                <img src="assets/img/feature/5/1.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- feature area end -->



    <!-- about area start -->
    <section class="about-area pt-140 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img mb-50">
                        <img src="{{asset('assets/img/about/1/1.png')}}" alt="">
                        <div class="about-img-meta">
                            <span><i class="fa-solid fa-star"></i>4.5 (3.4k Reviews)</span>
                            <h5>Congratulations</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="about-content mb-50">
                        <div class="section-area mb-20">
                            <span class="section-subtitle">PROFILE & ACHIEVEMENTS</span>
                            <h2 class="section-title mb-15">Profile & Achievements of Enroot Abacus</h2>
                            <p class="section-text">
                                Enroot Abacus Pvt. Ltd. has started it's journey in 2012 by Mr. Suklambar Mitra (Founder
                                & Director) & after overcoming many obstacles in if's pathway, become one of the fastest
                                growing Math's Excellence Company in Eastern India. We have not only recognized our brand
                                but also enlightened ourselves after several hurdles.
                            </p>
                            <br>
                            <p class="section-text">
                                Enroot Abacus is specially dealing with 3 educational products for students of age group
                                5 to 18 ABACUS, Vedic Mathematics & Kid's English. The mission of The company is to
                                enhance Visualisation, Listening skills, Concentration, Comprehension, Improving skills
                                & accuracy which leads overall development of academic proficiency of a student.

                            </p>
                            <br>
                            <p class="section-text">
                                The company is providing franchisees in different locations in various states like
                                Bengal, Bihar, Jharkhand, Assam, Delhi NCR, Haryana, Rajasthan and Odisha. Currently the
                                company is having more than 400+ standalone centres, 100+ Schools having along with
                                18000 students ( approx.) across the country. Apart from, we are successfully running
                                our ONLINE classes for the students outside the country specially in South Africa,
                                Dubai, Singapore & U.S.A.

                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- category area start -->
    <section class=" pb-110">
        <div class="container">

            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="h3_category-item mb-30">
                        <div class="h3_category-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path fill="#fe0050"
                                        d="M256 512C114.84 512 0 397.16 0 256S114.84 0 256 0s256 114.84 256 256-114.84 256-256 256zm0 0"
                                        opacity="1" data-original="#fe0050" class=""></path>
                                    <path fill="#e10555" d="M256 0v512c141.16 0 256-114.84 256-256S397.16 0 256 0zm0 0"
                                        opacity="1" data-original="#e10555" class=""></path>
                                    <path fill="#d9e7f3"
                                        d="M256 427c-94.29 0-171-76.71-171-171S161.71 85 256 85s171 76.71 171 171-76.71 171-171 171zm0 0"
                                        opacity="1" data-original="#d9e7f3"></path>
                                    <path fill="#c8d4df" d="M256 85v342c94.29 0 171-76.71 171-171S350.29 85 256 85zm0 0"
                                        opacity="1" data-original="#c8d4df" class=""></path>
                                    <path fill="#fe0050"
                                        d="M256 337c-44.664 0-81-36.336-81-81s36.336-81 81-81 81 36.336 81 81-36.336 81-81 81zm0 0"
                                        opacity="1" data-original="#fe0050" class=""></path>
                                    <path fill="#e10555" d="M256 175v162c44.664 0 81-36.336 81-81s-36.336-81-81-81zm0 0"
                                        opacity="1" data-original="#e10555" class=""></path>
                                    <path fill="#2d2d55"
                                        d="M256 271c-3.84 0-7.68-1.465-10.605-4.395-5.86-5.855-5.86-15.355 0-21.21l110.308-110.31c5.856-5.858 15.356-5.858 21.211 0 5.86 5.856 5.86 15.353 0 21.212L266.605 266.605A14.941 14.941 0 0 1 256 271zm0 0"
                                        opacity="1" data-original="#2d2d55"></path>
                                    <path fill="#0a0a48"
                                        d="m376.914 135.086-131.52 131.52C248.32 269.535 252.16 271 256 271s7.68-1.465 10.605-4.395l110.31-110.308c5.858-5.856 5.858-15.356 0-21.211zm0 0"
                                        opacity="1" data-original="#0a0a48"></path>
                                    <path fill="#ffc300"
                                        d="M425 165.64c-.418 0-.84-.019-1.262-.05l-58.687-4.95c-7.29-.617-13.074-6.398-13.688-13.687l-4.953-58.691a15 15 0 0 1 4.344-11.867l63.637-63.637a15 15 0 0 1 25.555 9.344l3.882 46.066 46.07 3.887a15.008 15.008 0 0 1 12.829 9.797 15.002 15.002 0 0 1-3.485 15.757l-63.637 63.637A15.001 15.001 0 0 1 425 165.641zm0 0"
                                        opacity="1" data-original="#ffc300"></path>
                                    <path fill="#fab400"
                                        d="m489.898 72.055-46.066-3.887-88.129 88.129a14.974 14.974 0 0 0 9.344 4.344l58.691 4.949c.422.031.84.05 1.262.05 3.96 0 7.781-1.57 10.605-4.394l63.637-63.637a15.007 15.007 0 0 0 3.485-15.761 15.01 15.01 0 0 0-12.829-9.793zm0 0"
                                        opacity="1" data-original="#fab400"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="h3_category_inner">
                            <div class="h3_category-item-content">
                                <p><a href="#">With zeal & enthusiasm the pioneer of EAPL team Mr. Suklambar Mitra has
                                        been awarded as <b>BEST INNOVATIVE EDUPRENEUR, BENGAL PRIDE AWARD</b> supported
                                        by <b> GOVERNMENT OF WEST BENGAL</b> in 2021 during Pandemic</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="h3_category-item mb-30">
                        <div class="h3_category-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path fill="#fe0050"
                                        d="M256 512C114.84 512 0 397.16 0 256S114.84 0 256 0s256 114.84 256 256-114.84 256-256 256zm0 0"
                                        opacity="1" data-original="#fe0050" class=""></path>
                                    <path fill="#e10555" d="M256 0v512c141.16 0 256-114.84 256-256S397.16 0 256 0zm0 0"
                                        opacity="1" data-original="#e10555" class=""></path>
                                    <path fill="#d9e7f3"
                                        d="M256 427c-94.29 0-171-76.71-171-171S161.71 85 256 85s171 76.71 171 171-76.71 171-171 171zm0 0"
                                        opacity="1" data-original="#d9e7f3"></path>
                                    <path fill="#c8d4df" d="M256 85v342c94.29 0 171-76.71 171-171S350.29 85 256 85zm0 0"
                                        opacity="1" data-original="#c8d4df" class=""></path>
                                    <path fill="#fe0050"
                                        d="M256 337c-44.664 0-81-36.336-81-81s36.336-81 81-81 81 36.336 81 81-36.336 81-81 81zm0 0"
                                        opacity="1" data-original="#fe0050" class=""></path>
                                    <path fill="#e10555" d="M256 175v162c44.664 0 81-36.336 81-81s-36.336-81-81-81zm0 0"
                                        opacity="1" data-original="#e10555" class=""></path>
                                    <path fill="#2d2d55"
                                        d="M256 271c-3.84 0-7.68-1.465-10.605-4.395-5.86-5.855-5.86-15.355 0-21.21l110.308-110.31c5.856-5.858 15.356-5.858 21.211 0 5.86 5.856 5.86 15.353 0 21.212L266.605 266.605A14.941 14.941 0 0 1 256 271zm0 0"
                                        opacity="1" data-original="#2d2d55"></path>
                                    <path fill="#0a0a48"
                                        d="m376.914 135.086-131.52 131.52C248.32 269.535 252.16 271 256 271s7.68-1.465 10.605-4.395l110.31-110.308c5.858-5.856 5.858-15.356 0-21.211zm0 0"
                                        opacity="1" data-original="#0a0a48"></path>
                                    <path fill="#ffc300"
                                        d="M425 165.64c-.418 0-.84-.019-1.262-.05l-58.687-4.95c-7.29-.617-13.074-6.398-13.688-13.687l-4.953-58.691a15 15 0 0 1 4.344-11.867l63.637-63.637a15 15 0 0 1 25.555 9.344l3.882 46.066 46.07 3.887a15.008 15.008 0 0 1 12.829 9.797 15.002 15.002 0 0 1-3.485 15.757l-63.637 63.637A15.001 15.001 0 0 1 425 165.641zm0 0"
                                        opacity="1" data-original="#ffc300"></path>
                                    <path fill="#fab400"
                                        d="m489.898 72.055-46.066-3.887-88.129 88.129a14.974 14.974 0 0 0 9.344 4.344l58.691 4.949c.422.031.84.05 1.262.05 3.96 0 7.781-1.57 10.605-4.394l63.637-63.637a15.007 15.007 0 0 0 3.485-15.761 15.01 15.01 0 0 0-12.829-9.793zm0 0"
                                        opacity="1" data-original="#fab400"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="h3_category_inner">
                            <div class="h3_category-item-content">
                                <p><a href="#">In 2022, August ENROOT ABACUS has achieved <b> 'NATION PRIDE AWARD' </b>
                                        in the category of <b>BEST BRAND BUILDING IN EDUCATION INDUSTRY </b>recognized
                                        by <b> MINISTRY OF SKILL DEVELOPMENT AND ENTREPRENEURSHIP </b> & also supported
                                        by <b> INTERNATIONAL CHAMBER OF COMMERCE </b></a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6">
                    <div class="h3_category-item mb-30">
                        <div class="h3_category-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path fill="#fe0050"
                                        d="M256 512C114.84 512 0 397.16 0 256S114.84 0 256 0s256 114.84 256 256-114.84 256-256 256zm0 0"
                                        opacity="1" data-original="#fe0050" class=""></path>
                                    <path fill="#e10555" d="M256 0v512c141.16 0 256-114.84 256-256S397.16 0 256 0zm0 0"
                                        opacity="1" data-original="#e10555" class=""></path>
                                    <path fill="#d9e7f3"
                                        d="M256 427c-94.29 0-171-76.71-171-171S161.71 85 256 85s171 76.71 171 171-76.71 171-171 171zm0 0"
                                        opacity="1" data-original="#d9e7f3"></path>
                                    <path fill="#c8d4df" d="M256 85v342c94.29 0 171-76.71 171-171S350.29 85 256 85zm0 0"
                                        opacity="1" data-original="#c8d4df" class=""></path>
                                    <path fill="#fe0050"
                                        d="M256 337c-44.664 0-81-36.336-81-81s36.336-81 81-81 81 36.336 81 81-36.336 81-81 81zm0 0"
                                        opacity="1" data-original="#fe0050" class=""></path>
                                    <path fill="#e10555" d="M256 175v162c44.664 0 81-36.336 81-81s-36.336-81-81-81zm0 0"
                                        opacity="1" data-original="#e10555" class=""></path>
                                    <path fill="#2d2d55"
                                        d="M256 271c-3.84 0-7.68-1.465-10.605-4.395-5.86-5.855-5.86-15.355 0-21.21l110.308-110.31c5.856-5.858 15.356-5.858 21.211 0 5.86 5.856 5.86 15.353 0 21.212L266.605 266.605A14.941 14.941 0 0 1 256 271zm0 0"
                                        opacity="1" data-original="#2d2d55"></path>
                                    <path fill="#0a0a48"
                                        d="m376.914 135.086-131.52 131.52C248.32 269.535 252.16 271 256 271s7.68-1.465 10.605-4.395l110.31-110.308c5.858-5.856 5.858-15.356 0-21.211zm0 0"
                                        opacity="1" data-original="#0a0a48"></path>
                                    <path fill="#ffc300"
                                        d="M425 165.64c-.418 0-.84-.019-1.262-.05l-58.687-4.95c-7.29-.617-13.074-6.398-13.688-13.687l-4.953-58.691a15 15 0 0 1 4.344-11.867l63.637-63.637a15 15 0 0 1 25.555 9.344l3.882 46.066 46.07 3.887a15.008 15.008 0 0 1 12.829 9.797 15.002 15.002 0 0 1-3.485 15.757l-63.637 63.637A15.001 15.001 0 0 1 425 165.641zm0 0"
                                        opacity="1" data-original="#ffc300"></path>
                                    <path fill="#fab400"
                                        d="m489.898 72.055-46.066-3.887-88.129 88.129a14.974 14.974 0 0 0 9.344 4.344l58.691 4.949c.422.031.84.05 1.262.05 3.96 0 7.781-1.57 10.605-4.394l63.637-63.637a15.007 15.007 0 0 0 3.485-15.761 15.01 15.01 0 0 0-12.829-9.793zm0 0"
                                        opacity="1" data-original="#fab400"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="h3_category_inner">
                            <div class="h3_category-item-content">
                                <p><a href="#">In the month of September, 2022 MentorX honoured Mr. Suklambar Mitra as
                                        <b> EDUCATION ICON 2022'</b> in categorization of <b> YOUNG AND EMERGING
                                            ENTREPRENEUR'</b> in Education Field, taken place at Taj Vivanta, Delhi.
                                    </a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="h3_category-item mb-30">
                        <div class="h3_category-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path fill="#fe0050"
                                        d="M256 512C114.84 512 0 397.16 0 256S114.84 0 256 0s256 114.84 256 256-114.84 256-256 256zm0 0"
                                        opacity="1" data-original="#fe0050" class=""></path>
                                    <path fill="#e10555" d="M256 0v512c141.16 0 256-114.84 256-256S397.16 0 256 0zm0 0"
                                        opacity="1" data-original="#e10555" class=""></path>
                                    <path fill="#d9e7f3"
                                        d="M256 427c-94.29 0-171-76.71-171-171S161.71 85 256 85s171 76.71 171 171-76.71 171-171 171zm0 0"
                                        opacity="1" data-original="#d9e7f3"></path>
                                    <path fill="#c8d4df" d="M256 85v342c94.29 0 171-76.71 171-171S350.29 85 256 85zm0 0"
                                        opacity="1" data-original="#c8d4df" class=""></path>
                                    <path fill="#fe0050"
                                        d="M256 337c-44.664 0-81-36.336-81-81s36.336-81 81-81 81 36.336 81 81-36.336 81-81 81zm0 0"
                                        opacity="1" data-original="#fe0050" class=""></path>
                                    <path fill="#e10555" d="M256 175v162c44.664 0 81-36.336 81-81s-36.336-81-81-81zm0 0"
                                        opacity="1" data-original="#e10555" class=""></path>
                                    <path fill="#2d2d55"
                                        d="M256 271c-3.84 0-7.68-1.465-10.605-4.395-5.86-5.855-5.86-15.355 0-21.21l110.308-110.31c5.856-5.858 15.356-5.858 21.211 0 5.86 5.856 5.86 15.353 0 21.212L266.605 266.605A14.941 14.941 0 0 1 256 271zm0 0"
                                        opacity="1" data-original="#2d2d55"></path>
                                    <path fill="#0a0a48"
                                        d="m376.914 135.086-131.52 131.52C248.32 269.535 252.16 271 256 271s7.68-1.465 10.605-4.395l110.31-110.308c5.858-5.856 5.858-15.356 0-21.211zm0 0"
                                        opacity="1" data-original="#0a0a48"></path>
                                    <path fill="#ffc300"
                                        d="M425 165.64c-.418 0-.84-.019-1.262-.05l-58.687-4.95c-7.29-.617-13.074-6.398-13.688-13.687l-4.953-58.691a15 15 0 0 1 4.344-11.867l63.637-63.637a15 15 0 0 1 25.555 9.344l3.882 46.066 46.07 3.887a15.008 15.008 0 0 1 12.829 9.797 15.002 15.002 0 0 1-3.485 15.757l-63.637 63.637A15.001 15.001 0 0 1 425 165.641zm0 0"
                                        opacity="1" data-original="#ffc300"></path>
                                    <path fill="#fab400"
                                        d="m489.898 72.055-46.066-3.887-88.129 88.129a14.974 14.974 0 0 0 9.344 4.344l58.691 4.949c.422.031.84.05 1.262.05 3.96 0 7.781-1.57 10.605-4.394l63.637-63.637a15.007 15.007 0 0 0 3.485-15.761 15.01 15.01 0 0 0-12.829-9.793zm0 0"
                                        opacity="1" data-original="#fab400"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="h3_category_inner">
                            <div class="h3_category-item-content">
                                <p><a href="#">Enroot Abacus Pvt Ltd. is established with a vision by Mr. Suklambar
                                        Mitra for imparting skill training for youth which will enable the students to
                                        compete with the fast growing competitive world in education, overall
                                        accentuating for their brain development which will be the key for their future.
                                    </a></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- category area end -->




    <section class="h9_testimonial-area">
        <div class="container">
            <div class="h9_testimonial-wrap pt-125 pb-135">
                <div class="row justify-content-end">
                    <div class="col-xl-9 col-lg-9">
                        <h3 class="h9_testimonial-title">Business Partner's Feedback</h3>

                        <div
                            class="h9_testimonial-active swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-6af5ae99ec3b4157" aria-live="polite"
                                style="transition-duration: 0ms; transform: translate3d(-690px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                    data-swiper-slide-index="2" role="group" aria-label="6/6" style="width: 690px;">
                                    <div class="h9_testimonial-item">
                                        <p>“Myself Gopa Roy, proud to be a part of EAPL as a Business Partner for last 7
                                            years with the desire to initiate my own business in education development.
                                            I started with my home centre at Agarpara and now extended with another
                                            fivecentres with major support by EAPL. In this pandemic situation also I
                                            could retain my student strength almost 87% within 310 students across
                                            Agarpara, Sodepur, Khardaha, Barrackpore, Birati and Palta with introducing
                                            online classes and other activities. Myself along with my students is very
                                            much satisfied with Team Enroot with their tremendous support, co-operation
                                            and new implementation of VedMaths and many other new courses.
                                            ”</p>
                                        <h6>ANJALI<span>INDIA</span></h6>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group"
                                    aria-label="1 / 6" style="width: 690px;">
                                    <div class="h9_testimonial-item">
                                        <p>“Myself Gopa Roy, proud to be a part of EAPL as a Business Partner for last 7
                                            years with the desire to initiate my own business in education development.
                                            I started with my home centre at Agarpara and now extended with another
                                            fivecentres with major support by EAPL. In this pandemic situation also I
                                            could retain my student strength almost 87% within 310 students across
                                            Agarpara, Sodepur, Khardaha, Barrackpore, Birati and Palta with introducing
                                            online classes and other activities. Myself along with my students is very
                                            much satisfied with Team Enroot with their tremendous support, co-operation
                                            and new implementation of VedMaths and many other new courses.
                                            ”</p>
                                        <h6>MRS. GOPA ROY<span>Agarpara, Sodepur, Khardaha,

                                                & Birati
                                            </span></h6>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group"
                                    aria-label="2 / 6" style="width: 690px;">
                                    <div class="h9_testimonial-item">
                                        <p>“Enroot Abacus Pvt. Ltd. is way more than an institution to me. In our
                                            journey for last four years we have shared a close band and have evolved to
                                            be a great family that has braved as overwhelming a challenge as Covid and
                                            demonstrated an undaunted tenacity which would have been difficult indeed
                                            but for the precious guidance we received from our honorable ED, Mr
                                            Suklambar Mitra. We at Matrix would also like to express our sincere thanks
                                            to the entire team at Enroot who refusing to give in to the pandemic
                                            pressure continued to extend their much needed support in this trying time.
                                            Taking online classes with 195 students was not a cake walk and without
                                            their robust support we would have never made it this far. I am sure soon we
                                            will see them grow really really big and scale up their presence across the
                                            country.
                                            ”</p>
                                        <h6>MR. AMIT PAUL<span>Bakhrahat, Amtala, Fatepur & Muchisa.
                                            </span></h6>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2"
                                    role="group" aria-label="3 / 6" style="width: 690px;">
                                    <div class="h9_testimonial-item">
                                        <p>“As the head of an educational institute I always believe that students must
                                            get new age learning experience in my preschool environment and this is
                                            being offered successfully by Enroot Abacus. Their team offers personalized
                                            support at each and every stage. In addition the dedicated team ensures that
                                            our operational needs and queries are handled effectively. The parents are
                                            also very happy with their kid's performance. At present I am running 3
                                            centers in West Bengal, Bongaon and Gobardanga and Thakurnagar”</p>
                                        <h6>MRS. MOUMITA PAL<span> Gobordanga, Bongaon & Thakurnagar
                                            </span></h6>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                    data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 690px;">
                                    <div class="h9_testimonial-item">
                                        <p>“At first I would like to congratulate ED, Mr. SuklombarMitra& Director, Mrs.
                                            Anindita Deb of Enroot Abacus Pvt Ltd for their outstanding contribution
                                            towards this fantastic Brain Development Program. Thereafter the thing which
                                            is crucial to mention is that 1, Mr. Pradip Ghosh as Director of Brain Power
                                            Computer Academy Kalna like to say many many congratulations to all the
                                            faculty members of Enroot Abacus for their tremendous support and hard
                                            work.l have been working with this independent organization for last 6 yrs
                                            with my full potential. Till the date I can proudly say that my Institution
                                            has produced so many champs in these last 4 yrs who have achieved several
                                            prizes in National Level Platform. Moreover, in current days my centre is
                                            running successfully with 450+ students. I do believe that I will be able to
                                            touch the milestone of 1000 students immediately.
                                            ”</p>
                                        <h6>MR. PRADIP KUMAR GHOSH.<span>Kalna, Magra & Memari

                                            </span></h6>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                    data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 690px;">
                                    <div class="h9_testimonial-item">
                                        <p>“I was always interested to introduce Abacus in my preschool since it is the need of the era and very soon is going to be proved as one of the most essential curriculum like the computer education. I am grateful to ENROOT ABACUS for giving me an opportunity to join their esteemed family. One thing I must admit that the abacus education provided by the ENROOT ABACUS is the most scientific and advanced in quality compared to any other abacus educational plan. Right this moment I am running a center of 224 students. I am looking to start at least 15 centers in different places of Darjeeling and Jalpaiguri districts within one year. I am sure ENROOT ABACUS is going to be a part of life of every student in coming future.

                                            ”</p>
                                        <h6>MRS. PALLABI CHAKRABORTY<span>Darjeeling & Jalpaiguri


                                            </span></h6>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <div class="h9_testimonial-thumb-wrap mt-90">
                            <div
                                class="h9_testimonial-thumbs swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                                <div class="swiper-wrapper" id="swiper-wrapper-1545565f63dc669d" aria-live="polite"
                                    style="transform: translate3d(-220px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-thumb-active"
                                        data-swiper-slide-index="0" role="group" aria-label="1 / 3"
                                        style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                        data-swiper-slide-index="1" role="group" aria-label="2 / 3"
                                        style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/2.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-visible swiper-slide-prev"
                                        data-swiper-slide-index="2" role="group" aria-label="3 / 3"
                                        style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                        data-swiper-slide-index="0" role="group" aria-label="1 / 3"
                                        style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-next"
                                        data-swiper-slide-index="1" role="group" aria-label="2 / 3"
                                        style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/2.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2"
                                        role="group" aria-label="3 / 3" style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-thumb-active"
                                        data-swiper-slide-index="0" role="group" aria-label="1 / 3"
                                        style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                        data-swiper-slide-index="1" role="group" aria-label="2 / 3"
                                        style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/2.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                        role="group" aria-label="3 / 3" style="width: 80px; margin-right: 30px;">
                                        <div class="h9_testimonial-img">
                                            <img src="{{asset('assets/img/testimonial/9/3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="h9_testimonial-pagination d-none d-xl-flex swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet"
                tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                tabindex="0" role="button" aria-label="Go to slide 3"></span>
        </div>
        <div class="h9_testimonial-navigation">
            <div class="h9_testimonial-prev" tabindex="0" role="button" aria-label="Next slide"
                aria-controls="swiper-wrapper-6af5ae99ec3b4157">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 15L8 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M15 8L8 1L1 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="h9_testimonial-next" tabindex="0" role="button" aria-label="Previous slide"
                aria-controls="swiper-wrapper-6af5ae99ec3b4157">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 1L8 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M15 8L8 15L1 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>
    </section>

</main>



@endsection