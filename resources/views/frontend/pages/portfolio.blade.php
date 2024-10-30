@extends('frontend.layouts.master')
@php
    // $lang = app()->getLocale();
// $social = \App\Models\Chef::where('language',$lang());
@endphp
{{-- @foreach ($social as $social) --}}

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Portfolio Page</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="uploads/media_66a2be585fe89.jpg" alt=""></li>
                <li><img src="uploads/media_66a2be585fe89.jpg" alt=""></li>
                <li><img src="uploads/media_66a2be585fe89.jpg" alt=""></li>
                <li><img src="uploads/media_66a2be585fe89.jpg" alt=""></li>
                <li><img src="uploads/media_66a2be585fe89.jpg" alt=""></li>
                <li><img src="uploads/media_66a2be585fe89.jpg" alt=""></li>

            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- portfolio-area -->
    <section class="portfolio__inner">
        <div class="container">

            <div class="portfolio__inner__active">

                @foreach ($portfolio as $item)
                    <div class="portfolio__inner__item grid-item cat-two cat-three">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-6 col-md-10">
                                <div class="portfolio__inner__thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{ asset($item->portfolio_image) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="portfolio__inner__content">
                                    <h2>{{ $item->portfolio_name }}</h2>
                                    <h2><a
                                            href="{{ route('portfolio.details', $item->id) }}">{{ $item->portfolio_title }}</a>
                                    </h2>
                                    <p>{!! Str::limit($item->portfolio_description, 200) !!} </p>
                                    <div class="fp__single_team_text">
                                    <ul class="d-flex"> <h3>Contact: </h3>
                                        @if ($item->facebook)
                                        <li><a href="{{ $item->facebook }}" style="padding-inline: 10px"><i class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                        @if ($item->linkedin)
                                        <li><a href="{{ $item->linkedin}}" style="padding-inline: 10px"><i class="fab fa-linkedin-in"></i></a></li>

                                        @endif
                                        @if ($item->twitter)
                                        <li><a href="{{ $item->twitter}}" style="padding-inline: 10px"><i class="fab fa-twitter"></i></a></li>
                                        @endif
                                        @if ($item->telegram)
                                        <li><a href="{{$item->telegram}}" style="padding-inline: 10px"><i class="fab fa-telegram"></i></a></li>

                                        @endif
                                        @if ($item->tiktok)
                                        <li><a href="{{$item->tiktok}}" style="padding-inline: 10px"><i class="fab fa-tiktok"></i></a></li>

                                        @endif
                                        @if ($item->insta)
                                        <li><a href="{{$item->instagram}}" style="padding-inline: 10px"><i class="fab fa-instagram"></i></a></li>

                                        @endif
                                        @if ($item->web)
                                        <li><a href="{{ $item->web }}" style="padding-inline: 10px"><i class="fas fa-link"></i></a></li>
                                        @endif

                                    </ul></div>
                                    <a href="{{ route('portfolio.details', $item->id) }}" class="link">View Case Study</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </section>
    <!-- portfolio-area-end -->


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
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form</p>
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
{{-- @endforeach --}}
@endsection
