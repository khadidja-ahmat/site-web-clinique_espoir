<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  @yield('title') {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"rel="stylesheet"  type='text/css'>
    -->
    <link href="{{ asset('assets/font/fontawesome.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
@extends('layouts')
@section('content')

{{-- <aside class="side-info-wrapper mm-only">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab"
                    href="#menu-tab-1" role="tab" aria-controls="menu-tab-1"
                    aria-selected="true">Menu</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2"
                    role="tab" aria-controls="menu-tab-2" aria-selected="false">Info</a>
            </div>
        </nav>
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.html">
                    <img src="assets/images/logo/logo-black.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel"
                aria-labelledby="menu-tab-1-tab">
                <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel"
                aria-labelledby="menu-tab-2-tab">
                <div class="side-info">
                    <div class="side-info__content mb-35">
                        <h4 class="title mb-5">About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="site-btn mt-20" href="contact.html">Contact us</a>
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title mb-10">Contact us</h4>
                        <ul class="contact__info list-unstyled">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Bowery St., New York, NY 10013, USA</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+1255-568-6523</p>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>information@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                        <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </aside> --}}

  {{--   <!-- side info for desktop view -->
    <aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.html">
                    <img src="assets/images/logo/logo-black.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="title mb-5">About us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat.</p>
                <a class="site-btn mt-20" href="contact.html">Contact us</a>
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-10">Contact us</h4>
                <ul class="contact__info list-unstyled">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Bowery St., New York, NY 10013, USA</p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+1255-568-6523</p>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>information@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </aside>

    <!-- cart list -->
    <aside class="cart-bar-wrapper">
        <div class="cart-bar__close">
            <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
        <div class="cart-bar">
            <h4 class="cart-bar__title">Cart Items - <span>4</span></h4>
            <div class="cart-bar__lists">
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-1.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$19.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-2.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$36.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-3.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-4.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
                <span>Sub Total:</span>
                <span>$87.00</span>
            </div>
            <div class="btns d-flex align-items-center justify-content-center">
                <a href="cart.html" class="site-btn">View Cart</a>
                <a href="checkout.html" class="site-btn site-btn__borderd">Checkout</a>
            </div>
        </div>
    </aside>
    <div class="overlay"></div>

    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="assets/images/logo/contact-bg.jpeg" data-overlay="dark" data-opacity="5">
         <div class="shape shape__1"><img src="assets/images/shape/breadcrumb-shape-1.png" alt=""></div>
            <div class="shape shape__2"><img src="assets/images/shape/breadcrumb-shape-2.png" alt=""></div>
             <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">A propos de la clinique Espoir</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                   <span>Home </span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span> / About us</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- about area start -->
        <section class="about__area about__area--2 position-relative pt-125 pb-105">
            <span class="shape shape__1 position-absolute"><img src="assets/images/shape/about-shape-2-1.png" alt=""></span>
            <span class="shape shape__2 position-absolute"><img src="assets/images/shape/about-shape-2-2.png" alt=""></span>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7">
                        <div class="about__left about__left--2 position-relative">
                            <img class="big" src="assets/images/about/about-img-2-1.png" alt="img">
                            <img class="small position-absolute" src="assets/images/about/about-img-2-2.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1">
                        <div class="about__right about__right--2 pl-45 pt-45">
                            <div class="section-heading section-heading__black">
                                <span class="sub-title">A propos de Coffee-Shop La Saveur</span>
                                <h2 class="title mb-25">L'un de meilleur Coffee-Shop dans la ville de N'djamena  </h2>    
                                <p>Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit ligula volutpat, a feugiat urna maximus. Cras massa nibhtincidunt.</p>
                            </div>
                            <ul class="about__list list-unstyled mt-25">
                                <li><span class="icon"><i class="fal fa-check"></i></span> What is Lorem Ipsum Lorem Ipsum is simply.</li>
                                <li><span class="icon"><i class="fal fa-check"></i></span> Dummy text of the printing text.</li>
                                <li><span class="icon"><i class="fal fa-check"></i></span> Typesetting industry Lorem Ipsum has been the industry's</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- wcu section start -->
        --}} {{-- <section class="wcu__area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-60">
                            <span class="sub-title">why choose us</span>
                            <h2 class="title">We are Provide Best Service <br>
                                in your city</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-none-30">
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30 text-center">
                        <div class="wcu__item">
                            <div class="icon">
                                <img src="assets/images/icons/wcu-1.png" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title">testy coffee recipe</h2>
                                <p>Accumsa nfringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsany.</p>
                                <a href="about.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30 text-center">
                        <div class="wcu__item">
                            <div class="icon">
                                <img src="assets/images/icons/wcu-2.png" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title">Great Location</h2>
                                <p>Accumsa nfringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsany.</p>
                                <a href="about.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30 text-center">
                        <div class="wcu__item">
                            <div class="icon">
                                <img src="assets/images/icons/wcu-1.png" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title">Professional Chef</h2>
                                <p>Accumsa nfringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsany.</p>
                                <a href="about.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- wcu section end -->

        <!-- best-coffe section start -->
        <div class="best-coffe__area position-relative">
            <div class="best-coffe__bg">
                <img src="assets/images/logo/imm.jpg" alt="">
            </div>
            <div class="container">
            <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-60">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-xl-8 pl-35">
                        <div class="best-coffe__wrapper">
                            <div class="section-heading section-heading__black">
                                <h4 class="title mb-25">Le Specialiste de la clinique Espoir de vue</h4>
                                <p>Dr Mahamat Adam Diko, médecin ophtalmologiste à l’Hôpital Général de Référence nationale (HGRN) est le responsable du Cabinet Espoir de la vue.</p>
                                <p>Espoir de vue est une clinique ophtalmologique, qui a pour but de fournir des services de soins oculaires specialisés.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- best-coffe section end -->

        <!-- team section start -->
        {{-- <div class="team__area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-60">
                            <span class="sub-title">Our Chef</span>
                            <h2 class="title">Meet our Professional</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-none-30">
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                        <div class="team__box">
                            <div class="thumb mb-30">
                                <img src="assets/images/team/team-1.jpg" alt="">
                                <div class="social-links">
                                    <button class="social-links__trigger d-flex align-items-center justify-content-center" type="button">
                                        <i class="fal fa-plus"></i>
                                    </button>
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="name">Rasalina de willamson</h4>
                                <span class="experience">12 year experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                        <div class="team__box">
                            <div class="thumb mb-30">
                                <img src="assets/images/team/team-2.jpg" alt="">
                                <div class="social-links">
                                    <button class="social-links__trigger" type="button">
                                        <i class="fal fa-plus"></i>
                                    </button>
                                    <ul class="list-unstyled">
                                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="name">Alextina Jimiey</h4>
                                <span class="experience">09 year experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                        <div class="team__box">
                            <div class="thumb mb-30">
                                <img src="assets/images/team/team-1.jpg" alt="">
                                <div class="social-links">
                                    <button class="social-links__trigger" type="button">
                                        <i class="fal fa-plus"></i>
                                    </button>
                                    <ul class="list-unstyled">
                                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="name">Jimmey Aenderson</h4>
                                <span class="experience">05 year experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- team section end -->

    </main>

    @endsection
