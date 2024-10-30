@php
    $error_404=App\Models\ErrorPage::find(3);
    
    $active_theme = 'layout2';

@endphp

@extends($active_theme)
@section('title')
    <title>{{ $error_404->page_name }}</title>
@endsection
@section('meta')
<title>{{ $error_404->page_name }}</title>
@endsection

@section('frontend-content')
        <!--=========================
        404 START
    ==========================-->
    <section class="wsus__error mt_205">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-md-8 col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="wsus_error_text text-center">
                        <div class="wsus_error_img">
                            <img src="{{ $error_404->image }}" alt="error" class="img-fluid w-100">
                        </div>
                        <h2>{{ $error_404->title}}</h2>
                        <a class="common_btn2" href="{{ route('home') }}">{{__('user.Go Back Home')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        404 END
    ==========================-->
@endsection
