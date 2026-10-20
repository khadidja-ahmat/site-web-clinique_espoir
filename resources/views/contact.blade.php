 @extends('layouts')
@section('content')

    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="{{ asset('assets/images/bg/breadcrumb-bg-1.jpeg') }}" data-overlay="dark" data-opacity="5">
            <div class="shape shape__1"><img src="{{ asset('assets/images/shape/breadcrumb-shape-1.png') }}" alt=""></div>
            <div class="shape shape__2"><img src="{{ asset('assets/images/shape/breadcrumb-shape-2.png') }}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">contactez-nous</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="home"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>contact</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- contact area start -->
        <div class="contact__area position-relative pt-120 pb-120">
            <span class="shape shape__1 position-absolute"><img src="{{ asset('assets/images/shape/hero-shape-2-1.png') }}" alt=""></span>
            <span class="shape shape__2 position-absolute"><img src="{{ asset('assets/images/shape/hero-shape-2-2.png') }}" alt=""></span>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact__wrapper">
                            <div class="row mt-none-30">
                                <div class="col-lg-4 col-md-6 mt-30">
                                    <div class="contact-info d-flex align-items-center justify-content-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/icons/ci-1.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Contact</h3>
                                            <a href="mailto:Israfilsupol836@gmail.com">dickomht@gmail.com</a>
                                            <a href="tel:088-01869018907">+235 66543234 / 22527623</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-30">
                                    <div class="contact-info d-flex align-items-center justify-content-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/icons/ci-2.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">localisation</h3>
                                            <p>N’Djamena,sur l’avenue Maldoum Bada Abbass
                                             au Nord de la capitale tchadienne</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-30">
                                    <div class="contact-info d-flex align-items-center justify-content-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/icons/ci-3.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Horaires</h3>
                                            <p>Lun - Sam (8:00 - 22:00)</p>
                                            <p>Dimanche - Fermée</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact__form mt-20">
                                        <form action="{{ route('home') }}" method="get">
                                            <div class="row">
                                                <div class="col-xl-6 mt-30">
                                                    <div class="form-group">
                                                        <input type="text" name="name" id="name" placeholder="Your name :">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 mt-30">
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" placeholder="Your Mail :">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mt-30">
                                                    <div class="form-group">
                                                        <input type="text" name="subject" id="subject" placeholder="Enter Your Subject :">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mt-30">
                                                    <div class="form-group">
                                                        <textarea name="message" id="message" placeholder="Your Massage :"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mt-20 text-center">
                                                    <button type="submit" class="site-btn">envoyé le message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
      @endsection