@extends('frontend.layouts.master')
@section('content')


            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $portfolio->portfolio_name }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="services__details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="services__details__thumb">
                             <img src=" {{ asset($portfolio->portfolio_image) }} " alt="">
                            </div>
                            <div class="services__details__content">
                                <h2 class="title">{{ $portfolio->portfolio_name }}</h2>
                                <h2 class="title">{{ $portfolio->portfolio_title }}</h2>
                                <p> {!! $portfolio->portfolio_description !!} </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="services__sidebar">
                                <div class="widget">
                                    <h5 class="title">Get in Touch</h5>
                                    <form action="#" class="sidebar__contact">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter your mail*">
                                        <textarea name="message" id="message" placeholder="Massage*"></textarea>
                                        <button type="submit" class="btn">send massage</button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h5 class="title">Personal Information</h5>
                                    <ul class="sidebar__contact__info">
                                        <li><span>Joined Date :</span> January, 2021</li>
                                        <li><span>Position :</span>CEO & Cofounder</li>
                                        <li><span>Nationality:</span>Ethiopia</li>
                                        <li class="cagegory"><span>Category :</span>
                                            <a href="portfolio.html">Photo,</a>
                                            <a href="portfolio.html">UI/UX</a>
                                        </li>
                                        <li><span>Project Link :</span> <a href="portfolio-details.html">https://www.yournews.com/</a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 class="title">Contact Information</h5>
                                    <ul class="sidebar__contact__info">
                                        <li><span>Address :</span>3200 Ethiopia Harar, <br>Shash Building</li>
                                        <li><span>Mail :</span> jemalabrahim@gmail.com</li>
                                        <li><span>Phone :</span> +251968292069</li>
                                        <li><span>Fax id :</span> 022123232324</li>
                                    </ul>
                                    <div class="fp__single_team_text">
                                    <ul class="d-flex" style="padding-top: 30px">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                        <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                    </ul></div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->


            <!-- contact-area -->
            <section class="homeContact homeContact__style__two">
                <div class="container">
                    <div class="homeContact__wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section__title">
                                    <span class="sub-title">07 - Say hello</span>
                                    <h2 class="title">Any questions? Feel free <br> to contact</h2>
                                </div>
                                <div class="homeContact__content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                    <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="homeContact__form">
                                    <form action="#">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter mail*">
                                        <input type="number" placeholder="Enter number*">
                                        <textarea name="message" placeholder="Enter Massage*"></textarea>
                                        <button type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->





@endsection
