@extends('frontend.layouts.master')

@section('seo_title'){{ $page_data->services_seo_title }}@endsection
@section('seo_meta_description'){{ $page_data->services_seo_meta_description }}@endsection

@section('content')
<section class="fp__breadcrumb" style="background: url({{ asset(config('settings.breadcrumb')) }});">
    <div class="fp__breadcrumb_overlay">
        <div class="container">
            <div class="fp__breadcrumb_text">
                <h1>{{ __('frontend.Service We Offer') }}</h1>
                <ul>
                    <li><a href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><a href="javascript:;">{{ __('frontend.Our Service') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="page-content service">
    <div class="container">
        <div class="row">
            @php $i=1; @endphp
            @foreach($services as $item)
            @php
            if($i%3 == 1) {
                $anim = 'fadeInLeft';
            } elseif($i%3 == 2) {
                $anim = 'fadeInUp';
            } elseif($i%3 == 0) {
                $anim = 'fadeInRight';
            }
            $i++;
            @endphp
            <div class="col-lg-4 col-md-6 wow {{ $anim }}">
                <div class="item">
                    <div class="icon"><i class="{{ $item->icon }}"></i></div>
                    <h3>{{ $item->name }}</h3>
                    <p>
                        {!! nl2br($item->short_description) !!}
                    </p>
                    <div class="button">
                        <a href="{{ route('service_detail', $item->slug) }}" class="btn btn-primary">{{ __('frontend.Read More') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
