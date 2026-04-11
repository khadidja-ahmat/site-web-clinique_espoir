@extends('layouts')
@section('content')

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
        <!-- hero area start -->
        {{-- <section class="hero__area hero__area--2 position-relative custom-padding"><h1> ESPOIR</h1>
            <span class="shape shape__1 position-absolute"><img src="assets/images/shape/moi.png" alt=""></span>
            <span class="shape shape__2 position-absolute"><img src="assets/images/shape/moi.png" alt=""></span>
            <div class="container-fluid custom-width">
                <div class="row mm-reverse">
                    <div class="col-xl-6 col-lg-7 align-self-center">
                         <div class="hero__content hero__content--2 position-relative">
                             <h1 class="title mb-10"><br>
                               DE VUE</h1>
                                   <div class="btns mt-45 d-flex align-items-center justify-content-start">
                                    <a href="about.html" class="site-btn site-btn__2">testy Coffee</a>
                                    <a href="contact.html" class="site-btn">Read More</a>
                                </div>
                         </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="hero__thumb hero__thumb--2 position-">
                            <img src="assets/images/shape/moi.png" alt="img">
                            <a href="http://www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection" data-animation="fadeInLeft" class="video-btn video-btn__2 d-flex align-items-center"><i class="fas fa-play"></i><span class="border-effect">play video</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}<section id="about">
  {{--   <marquee>
        <h1 color="orange"><strong> Bienvenue dans Espoir de Vue</strong></h1>
    </marquee>
 --}}
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{url('assets/images/logo/bg-banner.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('assets/images/logo/bg-banner.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('assets/images/logo/bg-banner.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
</div>
    </section>
        <!-- hero area end -->

        <!-- feature slider start -->
       {{--  <div class="feature__area feature__area--2 pb-115">
            <div class="container-fluid custom-width">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="feature__wrapper">
                            <div class="row mt-none-50">
                                <div class="col-xl-3 col-lg-6 col-md-6 mt-50">
                                    <div class="feature__item feature__item--2">
                                        <span class="year">1992</span>
                                        <div class="content mt-20">
                                            <h2 class="title mb-10">How we Started</h2>
                                            <p>Curabitur semper erat a lacusey <br> sedn consequat, sit amet quamey.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 mt-50">
                                    <div class="feature__item feature__item--2">
                                        <span class="year">2002</span>
                                        <div class="content mt-20">
                                            <h2 class="title">Coffee Beans</h2>
                                            <p>Curabitur semper erat a lacusey <br> sedn consequat, sit amet quamey.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 mt-50">
                                    <div class="feature__item feature__item--2">
                                        <span class="year">2014</span>
                                        <div class="content mt-20">
                                            <h2 class="title">Family Work</h2>
                                            <p>Curabitur semper erat a lacusey <br> sedn consequat, sit amet quamey.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 mt-50">
                                    <div class="feature__item feature__item--2">
                                        <span class="year">2019</span>
                                        <div class="content mt-20">
                                            <h2 class="title">Bangladeshy Grades</h2>
                                            <p>Curabitur semper erat a lacusey <br> sedn consequat, sit amet quamey.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- feature slider end -->

        <!-- about area start -->
        <section class="about__area about__area--2 grey-bg position-relative pt-120 pb-130">
         <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7">
                    <div class="logo__left logo__left--2 position-relative">
                            <img class="big" src="assets/images/logo/imm.jpg" alt="img"> 
                        </div>
                        {{-- <div class="logo__right logo__left--1 position-absolute">
                            <img class="small" src="assets/images/logo/moi.jpg" alt="img"> 
                        </div> --}}
                    </div>
                    <div class="col-xl-6 offset-xl-1">
                        <div class="about__right about__right--2 pl-45 pt-45">
                            <div class="section-heading section-heading__black">
                                <span class="sub-title">Apropos de Nous</span>
                                <h2 class="title mb-25">Clinique Espoir de Vue</h2>
                                <p> Espoir de vue est une clinique ophtalmologique, qui a pour but de fournir des services de soins oculaires specialisés. elle est dirigeé par des specialistes en ophtalmologies.</p>
                                <p>Nous sommes à la clinique Espoir de Vue, au Nord de la capitale tchadienne, N’Djamena, dans le 3e arrondissement, sur l’avenue Maldoum Bada Abbass. Dr Mahamat Adam Diko, médecin ophtalmologiste à l’Hôpital Général de Référence nationale (HGRN) est le responsable du Cabinet Espoir de la vue.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- about area end -->

        <!-- populer menu area start -->
        <section class="popular-menu__area grey-bg position-relative pb-120">
         {{--    <span class="shape shape__1 position-absolute"><img src="assets/images/shape/menu-shape-1.png" alt=""></span>
            <span class="shape shape__2 position-absolute"><img src="assets/images/shape/menu-shape-2.png" alt=""></span>
            <span class="shape shape__3 position-absolute"><img src="assets/images/shape/menu-shape-3.png" alt=""></span>
            <span class="shape shape__4 position-absolute"><img src="assets/images/shape/menu-shape-4.png" alt=""></span>
             --}}<div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-40">
                            <span class="sub-title">OFFRES DES SOINS</span>
                            <h2 class="title">Plateau technique</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="popular-menu__wrapper m-auto d-inline-block">
                            <div class="popular-menu__filter d-flex justify-content-center align-items-center mb-55">
                                <button class="active" data-filter="*">Tout</button>
                                <button data-filter=".cat1">Soins</button>{{-- 
                                <button data-filter=".cat2">Lentilles</button> --}}{{-- 
                                <button data-filter=".cat3">sandwiches</button> --}}
                                <button data-filter=".cat4">Lunettes</button>{{-- 
                                <button data-filter=".cat5">Black tea</button>
                                <button data-filter=".cat6">Grean Tea</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div id="popular-menu-grid" class="row popular-menu__grid mt-none-30">
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-sizer"></div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item cat1 cat5 mt-30">
                        <div class="popular-menu__item">
                            <div class="popular-menu__thumb">
                                <img src="assets/images/logo/lampe.jpg" alt="">
                                
                            </div>
                            <div class="popular-menu__content text-center">
                                <h2 class="title">
                                    <a href="product-details.html">Lampe a fente</a>
                                    <h6><a ><span>Détail:</span></a></h6>
                                </h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item cat2 cat5 cat4 mt-30">
                        <div class="popular-menu__item">
                            <div class="popular-menu__thumb">
                                <img src="assets/images/logo/ope.jpg" alt="">
                            </div>
                            <div class="popular-menu__content text-center">
                                <h2 class="title">
                                    <a href="product-details.html">Bloc opératoire</a>
                                    <h6><a><span>Détail:</span></a></h6>
                                </h2>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item cat1 cat2 cat5 mt-30">
                        <div class="popular-menu__item">
                            <div class="popular-menu__thumb">
                                <img src="assets/images/logo/oct.jpg" alt="">
                            </div>
                            <div class="popular-menu__content text-center">
                                <h2 class="title">
                                    <a href="product-details.html">OCT: Tomographie axiale computarisé</a>
                                    <h6><a ><span>Détail:</span></a></h6>
                                </h2>
                           {{--      <div class="pp__price mt-10 d-flex align-items-center justify-content-center">
                                    <h6 class="label">Price - </h6>
                                    <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                                </div>
                                <div class="pp__action pp__action--2 mt-15 d-flex align-items-center justify-content-center">
                                    <div class="cart d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                                    </div>
                                    <div class="wishlist d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <div class="view d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-eye"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item cat3 cat4 cat5 mt-30">
                        <div class="popular-menu__item">
                            <div class="popular-menu__thumb">
                                <img src="assets/images/logo/refract.jpg" alt="">
                            </div>
                            <div class="popular-menu__content text-center">
                                <h2 class="title">
                                    <a href="product-details.html">Réfractomètre automatique</a>
                                    <h6><a><span>Détail:</span></a></h6>
                                </h2>
                              {{--   <div class="pp__price mt-10 d-flex align-items-center justify-content-center">
                                    <h6 class="label">Price - </h6>
                                    <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                                </div>
                                <div class="pp__action pp__action--2 mt-15 d-flex align-items-center justify-content-center">
                                    <div class="cart d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                                    </div>
                                    <div class="wishlist d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <div class="view d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-eye"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item cat1 cat5 cat4 mt-30">
                        <div class="popular-menu__item">
                            <div class="popular-menu__thumb">
                                <img src="assets/images/logo/im.jpg" alt="">
                            </div>
                            <div class="popular-menu__content text-center">
                                <h2 class="title">
                                    <a href="product-details.html">lunette et lentille</a>
                                    <h6><a><span>Détail:</span></a></h6>
                                </h2>
                              {{--   <div class="pp__price mt-10 d-flex align-items-center justify-content-center">
                                    <h6 class="label">Price - </h6>
                                    <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                                </div>
                                <div class="pp__action pp__action--2 mt-15 d-flex align-items-center justify-content-center">
                                    <div class="cart d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                                    </div>
                                    <div class="wishlist d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <div class="view d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-eye"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item cat6 cat4 mt-30">
                        <div class="popular-menu__item">
                            <div class="popular-menu__thumb">
                                <img src="assets/images/logo/teno.jpg" alt="">
                            </div>
                            <div class="popular-menu__content text-center">
                                <h2 class="title">
                                    <a href="product-details.html">Ténometre a air pulsé</a>
                                    <h6><a><span>Détail:</span></a></h6>
                                </h2>
                               {{--  <div class="pp__price mt-10 d-flex align-items-center justify-content-center">
                                    <h6 class="label">Price - </h6>
                                    <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                                </div> --}}
                                {{-- <div class="pp__action pp__action--2 mt-15 d-flex align-items-center justify-content-center">
                                    <div class="cart d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                                    </div>
                                    <div class="wishlist d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <div class="view d-flex align-items-center justify-content-center">
                                        <a href="#0"><i class="fal fa-eye"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="topgrade__area topgrade__area--2 grey-bg pt-115 pb-115 position-relative">
           {{--  <span class="shape shape__1 position-absolute"><img src="assets/images/shape/top-grade-shape-2-1.png" alt=""></span>
            <span class="shape shape__2 position-absolute"><img src="assets/images/shape/top-grade-shape-2-2.png" alt=""></span>
             --}}<div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-55">
                            <span class="sub-title">Nos Offres</span>
                            <h2 class="title">comme offres nous avons les lunettes:</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-none-30">
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                        <div class="topgrade__item topgrade__item--2 text-center">
                            <div class="thumb">
                                <img src="assets/images/logo/img.jpg" alt="">
                                <span class="count">01</span>
                            </div>
                            <div class="content mt-20">
                                <h2 class="title"> A Monture semi cerclée</h2>
                                <p>elle offrent un equilibre entre la solidité des lunette a monture <br> compléteet la legereté des lunettes sans monture</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-85">
                        <div class="topgrade__item topgrade__item--2 text-center">
                            <div class="thumb">
                                <img src="assets/images/logo/lunette.jpg" alt="">
                                <span class="count">02</span>
                            </div>
                            <div class="content mt-20">
                                <h2 class="title"> A Monture cerclée </h2>
                                <p>elle ont une monture qui entoure entierement les verres<br>et offrent un style élégant et moderne </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                        <div class="topgrade__item topgrade__item--2 text-center">
                            <div class="thumb">
                                <img src="assets/images/logo/image.jpg" alt="">
                                <span class="count">03</span>
                            </div>
                            <div class="content mt-20">
                                <h2 class="title">lunette de lecture </h2>
                                <p>Elle sont concues specialement pour faciliter la lecture de pe
                                ret<br>et corrige la presbytie, les troubles de la vision lié a l'age </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-85">
                        <div class="topgrade__item topgrade__item--2 text-center">
                            <div class="thumb">
                                <img src="assets/images/logo/im.jpg" alt="">
                                <span class="count">04</span>
                            </div>
                            <div class="content mt-20">
                                <h2 class="title">lunette sans monture</h2>
                                <p>Elle n'ont pas de onture autour des verres<br>elle sont legéres et offrent un aspect minimaliste </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top grade area end -->

        <!-- blog area start -->
        <!-- blog area end -->
    </main>

    @endsection