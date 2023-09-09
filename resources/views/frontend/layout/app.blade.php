<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="{{asset('frontend/manifest.json')}}">
    <link rel="icon" href="{{asset('frontend/assets/images/favicon/4.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('frontend/assets/images/favicon/4.png')}}">
    <meta name="theme-color" content="#7520dd">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Voxo">
    <meta name="msapplication-TileImage" content="{{asset('frontend/assets/images/favicon/4.png')}}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="{{asset('frontend/assets/images/favicon/3.png')}}" type="image/x-icon" />
    <title>Apex Bags</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/bootstrap.css')}}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/feather-icon.css')}}">

    <!-- Icon Start -->
    <link rel="icon" href="{{asset('frontend/assets/images/shoes/png/001-hotel-service.png')}}">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/animate.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/slick/slick-theme.css')}}">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/demo3.css')}}">

</head>

@include('frontend.common.header')
@yield('content')
@include('frontend.common.footer')

<script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('frontend/assets/js/feather/feather.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('frontend/assets/js/lazysizes.min.js')}}"></script>

<!-- Add To Home js -->
<script src="{{asset('frontend/assets/js/pwa.js')}}"></script>

<!-- Timer Js -->
<script src="{{asset('frontend/assets/js/timer1.js')}}"></script>

<!-- Slick js-->
<script src="{{asset('frontend/assets/js/slick/slick.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick/slick-animation.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick/custom_slick.js')}}"></script>

<!-- newsletter js -->
<script src="{{asset('frontend/assets/js/newsletter.js')}}"></script>

<!-- add to cart modal resize -->
<script src="{{asset('frontend/assets/js/cart_modal_resize.js')}}"></script>

<!-- Notify js-->
<script src="{{asset('frontend/assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>

<!-- script js -->
<script src="{{asset('frontend/assets/js/theme-setting.js')}}"></script>
<script src="{{asset('frontend/assets/js/script.js')}}"></script>

</body>

</html>