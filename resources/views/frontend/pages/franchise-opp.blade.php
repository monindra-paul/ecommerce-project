@extends('frontend.layout.app')
@section('content')


<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg-default" data-background="{{asset('assets/img/breadcrumb/breadcrumb-bg.jpg')}}">
        <img src="{{asset('assets/img/breadcrumb/shape-1.png')}}" alt="" class="breadcrumb-shape">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title">Francisee Career</h2>
                        <div class="breadcrumb-list">
                            <a href="{{url('/')}}">Home</a>
                            <span>Francisee Career</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->


    
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
                        <span class="section-subtitle">Francisee Career</span>
                        <h2 class="section-title mb-15">Francisee Career</h2>
                        <p class="section-text">
                            The dream of owning a business is a dream that lot of people have. For some this dream can be fulfilled by purchasing a franchisee. A franchisee business can be a very viable option for an individual whose goal is to be a successful entrepreneur. It offers an alternative route for aspiring businessmen and businesswomen who don't necessarily want to come up with anything novel or original.

                        </p>
                        <br>
                        <p class="section-text">
                            We take immense pride in declaring that ENROOT ABACUS PRIVATE LIMITED is now Eastern India's one of the largest educational companies with high growth in terms of Turnover, Franchisee network and most importantly Franchisee profitability based on our various type of Training and Support.
              

                        </p> 
                        <br>
                        <p class="section-text">                           
                            With over 400 successful entrepreneurs across India, join us in an exciting journey of Income stability and imparting skill development training to children. If you have a passion for working with children, then Enroot Abacus is the right platform for you. All you need is passion and a little investment!
                        </p>
                    </div>                    
                </div>
                  
                </div>
            </div>

            <p>We give you an exciting opportunity to be partner with us. As a franchisee, you can deliver a great learning experience for children while building a profitable and sustainable long-term business.</p>
        </div>
    </div>
</section>

<!-- about area end -->


    <!-- career area start -->
    <section class="h8_career-area pt-110 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-area-8 text-center mb-50">
                        <span class="section-subtitle">Assistances</span>
                       <h2 class="section-title mb-0">Marketing activity supports</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-12 text-center">
                <img src="{{asset('assets/img/enroot/marketing-activity.png')}}" alt="xc" srcset="" width="75%">
            </div>
            
        </div>
    </section>
    <!-- career area end -->


    <!-- career area start -->
    <section class="h8_career-area pt-110 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-area-8 text-center mb-50">
                        <span class="section-subtitle">Assistances</span>
                       <h2 class="section-title mb-0">Training supports</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-12 text-center">
                <img src="{{asset('assets/img/enroot/traing-supports.png')}}" alt="xc" srcset="" width="75%">
            </div>
            
        </div>
    </section>
    <!-- career area end -->



    <!-- career area start -->
    <section class="h8_career-area pt-110 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-area-8 text-center mb-50">
                        <span class="section-subtitle">Assistances</span>
                       <h2 class="section-title mb-0">Material's Support</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-12 text-center">
                <img src="{{asset('assets/img/enroot/materials.png')}}" alt="xc" srcset="" width="75%">
            </div>
            
        </div>
    </section>
    <!-- career area end -->





</main>

@endsection