@extends('frontend.layouts.master')

@section('content')
    <!--=============================
            BREADCRUMB START
        ==============================-->
    <section class="fp__breadcrumb" style="background: url({{ asset(config('settings.breadcrumb')) }});">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>about US</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><a href="javascript:;">about us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
            BREADCRUMB END
        ==============================-->


    <!--=============================
            ABOUT PAGE START
        ==============================-->
    <section class="fp__about_us mt_120 xs_mt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__about_us_img">
                        <img src="{{ asset(@$about->image) }}" alt="about us" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__section_heading mb_40">
                        <h4>{!! @$about->title !!}</h4>
                        <h2>{!! @$about->main_title !!}</h2>
                        <span>
                            <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                        </span>
                    </div>
                    <div class="fp__about_us_text">
                        {!! @$about->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wsus__about_us mt_115 xs_mt_75 pb_120 xs_pb_80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="wsus__about_us_text">
                        <h5>{{ $author->header }}</h5>
                        <h2>{{ $author->title }}</h2>
                <p>{{ $author->description }}</p>
                        <div class="wsus__about_text_img d-flex flex-wrap align-items-center">
                            <div class="img">
                                <img src="{{ asset('frontend/images/1810383098768579.jpg') }}" alt="about" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h3>{{$author->name }}</h3>
                                <p>{{ $author->desgination }}</p>
                            </div>
                            <div class="signature">
                                <img src="{{ asset($author->signature) }}" alt="about" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="wsus__about_us_img">
                        <img src="{{ asset($author->image_2) }}" alt="about us" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=============================
        WHY CHOOSE START
    ==============================-->
    @include('frontend.home.components.why-choose')
    <!--=============================
        WHY CHOOSE END
    ==============================-->
    @include('frontend.home.components.features-section')


    <section class="fp__about_video mt_100 xs_mt_70">
        <div class="container wow fadeInUp" data-wow-duration="1s">
            <div class="fp__about_video_bg" style="background: url({{ getYtThumbnail(@$about->video_link, 'high') }});">
                <div class="fp__about_video_overlay">
                    <div class="row">
                        <div class="col-12">
                            <div class="fp__about_video_text">
                                <p>Watch Videos</p>
                                <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
                                    href="{{ @$about->video_link }}">
                                    <i class=" fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!--=============================
        TEAM START
        ==============================-->
        @include('frontend.home.components.team')
        <!--=============================
        TEAM END
        ==============================-->

         <!--=============================
            COUNTER START
        ==============================-->
        @include('frontend.home.components.counter')
        <!--=============================
                COUNTER END
        ==============================-->

        <!--=============================
           TESTIMONIAL  START
        ==============================-->
        @include('frontend.home.components.testimonial')
        <!--=============================
                TESTIMONIAL END
        ==============================-->
    <!--=============================
            ABOUT PAGE END
        ==============================-->

        {{-- @if ($why_choose_us->visibility) --}}
    <section class="wsus__why_choose_2 pt_115 xs_pt_75 pb_115 xs_pb_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 m-auto">
                    <div class="wsus__section_heading mb_15">
                        <h5>{{ $why_choose_us->title1 }}</h5>
                        <h2>{{ $why_choose_us->title2 }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <div class="wsus__why_choose_item">
                        <div class="img">
                            <img src="{{ asset($why_choose_us->item_icon1) }}" alt="why choose" class="img-fluid w-100">
                        </div>
                        <h4>{{ $why_choose_us->item_title1 }}</h4>
                        <p>{{ $why_choose_us->item_description1 }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wsus__why_choose_item center">
                        <div class="img">
                            <img src="{{ asset($why_choose_us->item_icon2) }}" alt="why choose" class="img-fluid w-100">
                        </div>
                        <h4>{{ $why_choose_us->item_title2 }}</h4>
                        <p>{{ $why_choose_us->item_description2 }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wsus__why_choose_item last">
                        <div class="img">
                            <img src="{{ asset($why_choose_us->item_icon3) }}" alt="why choose" class="img-fluid w-100">
                        </div>
                        <h4>{{ $why_choose_us->item_title3 }}</h4>
                        <p>{{ $why_choose_us->item_description3 }}</p>
                    </div>
                </div>
            </div>
     </div>
    </section>
    {{-- @endif --}}
@endsection
