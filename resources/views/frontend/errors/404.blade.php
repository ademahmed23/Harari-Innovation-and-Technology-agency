@php
    $error_404=App\Models\ErrorPage::first();
@endphp

@extends('frontend.layouts.master')
@section('title')
    <title>{{__('user.Sorry, Page Not Found')}}</title>
@endsection

@section('content')
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="wsus__breadcrumb" style="background: url({{ asset('frontend/images/breadcrumb_bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wsus__breadcrumb_text">
                        <h1>404</h1>
                        <ul class="d-flex flex-wrap">
                            <li><a href="{{ route('home') }}">{{__('frontend.home')}}</a></li>
                            <li><a href="javascript:;">404</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        ERROR/404 START
    ==============================-->

    <section class="wsus__error pt_120 xs_pt_80 pb_115 xs_pb_75">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-md-8 col-lg-7 m-auto">
                    <div class="wsus_error_text text-center">
                        <div class="wsus_error_img">
                            <img src="{{ asset($error_404->image) }}" alt="error" class="img-fluid w-100">
                        </div>
                        <h2>{{ $error_404->title }}</h2>
                        <a class="common_btn" href="{{ route('home') }}">{{ $error_404->button_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        ERROR/404 END
    ==============================-->

@endsection
