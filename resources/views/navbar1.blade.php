
    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                       I
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
        <header class="site-header">
        <div class="header-top header-top__2">
            <div class="container-fluid custom-width">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="header-top__left d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logo/images.png') }}" alt="img">
                                </a>
                            </div>
                            <ul class="header-top__infos pl-75 list-unstyled d-flex align-items-center mb-0">
                                <li><a href="tel:91800458568"><i class="fas fa-phone-square"></i>+235 66470622</a></li>
                                <li><i class="fa fa-map-marker-alt"></i> N'Djamena / Tchad</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12  align-self-center">
                        <div class="header-top__right header-top__right--2 d-flex justify-content-xl-end justify-content-center align-items-center">
                            <div class="social-links social-links__2 d-flex align-items-center justify-content-md-start justify-content-center">
                                <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <a href="#0" class="site-btn">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area menu-area-2 custom-padding">
            <div class="container-fluid custom-width">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-6">
                        <div class="logo mm-only d-md-block d-lg-none">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/logo/logo-black.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="main-menu main-menu__2">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a>
                                        {{-- <ul class="sub-menu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="home-2.html">Home 02</a></li>
                                            <li class="active"><a href="home-3.html">Home 03</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="{{ route('about') }}">About</a>
                                    {{--  <ul class="sub-menu"aria-labelledby="navbarDropdown">
                                         <li><a class="dropdown-item" href="{{route('list.patient')}}">Emplacement</a></li>
                                         <li><a class="dropdown-item" href="{{route('list.employe')}}">offres </a></li>
                                         <li><a class="dropdown-item" href="{{route('list.employe')}}">Adresse</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="{{ route('equipe') }}">Équipe</a></li>
                                    @auth
<li><a href="#0">listes</a>
                                         <ul class="sub-menu"aria-labelledby="navbarDropdown">
                                         <li><a href="{{route('list.patient')}}">Patients</a></li>
                                         <li><a href="{{route('list.employe')}}">Employés</a></li>
                                         <li><a href="{{route('list.medecin')}}">Medecins</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">pages</a>
                                        <ul class="sub-menu">
                                        <li><a class="dropdown-item" href="{{route('list.rdv')}}">Rendez-vous</a></li> 
                                        <li><a class="dropdown-item" href="{{route('list.consultation')}}">Consultations</a></li>   
                                        <li><a class="dropdown-item" href="{{route('list.ordonnance')}}">Ordonnance</a></li>
                                        <li><a class="dropdown-item" href="{{route('list.historique')}}">Historiques Médical</a></li>
                                        </ul> 
                                    </li>
                                    @endauth
<li><a href="{{ route('contact') }}">Contact</a></li>
                                    @guest
                                    <li><a href="{{ route('login') }}">Connexion</a></li>
                                    @else
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}" style="display:inline">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0" style="color:inherit;font:inherit;text-transform:inherit">Déconnexion</button>
                                        </form>
                                    </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-6 align-self-center">
                        <div class="menu-area__right menu-area__right--2 d-flex justify-content-end align-items-center">
                            <div class="search">
                                <div class="search__trigger item">
                                    <span class="open"><i class="far fa-search"></i></span>
									<span class="close"><i class="fal fa-times"></i></span>
                                </div>
                                <div class="search__form">
                                    <form role="search" method="get" action="{{ route('home') }}">
                                        <input type="search" name="s" value="" placeholder="Search Keywords">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="hamburger-trigger item">
                                <i class="far fa-bars"></i>
                            </div>
                            <div class="cart cart-trigger item position-relative">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="cart__count">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- side info for mobile view -->
    <aside class="side-info-wrapper mm-only">
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
                    <img src="{{ asset('assets/images/logo/logo-black.png') }}" alt="logo">
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
    </aside>

    <!-- side info for desktop view -->
<aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo/logo-black.png') }}" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="title mb-5">Apropos</h4>
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
                        <img src="{{ asset('assets/images/top-grade/tg-1.png') }}" alt="image_not_found">
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
                        <img src="{{ asset('assets/images/top-grade/tg-2.png') }}" alt="image_not_found">
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
                        <img src="{{ asset('assets/images/top-grade/tg-3.png') }}" alt="image_not_found">
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
                        <img src="{{ asset('assets/images/top-grade/tg-4.png') }}" alt="image_not_found">
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