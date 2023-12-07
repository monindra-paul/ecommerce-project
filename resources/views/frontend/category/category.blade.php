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
                        <h1>Categories</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION BLOG -->
        <div class="section">
            <div class="container">
                <div class="row">
                    @if($categories->isNotEmpty())
                    @foreach($categories as $category)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="blog_post blog_style2 box_shadow1">
                            @if($category->image !="")
                            <div class="blog_img">
                                <a href="{{route('front.shop',$category->slug)}}">
                                    <img src="{{asset('uploads/category/thumb/'. $category->image)}}" alt="blog_small_img1">
                                </a>
                            </div>
                            @endif
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title text-center"><a href="{{route('front.shop',$category->slug)}}">{{$category->name}}</a></h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
              
                </div>
                
            </div>
        </div>
        <!-- END SECTION BLOG -->

        

    </div>
    <!-- END MAIN CONTENT -->

@endsection