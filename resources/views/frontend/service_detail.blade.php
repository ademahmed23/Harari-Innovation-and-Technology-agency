@extends('frontend.layouts.master')

@section('seo_title'){{ $service_detail->seo_title }}@endsection
@section('seo_meta_description'){{ $service_detail->seo_meta_description }}@endsection

@section('content')
<div class="page-banner" style="background-image: url({{ asset('uploads/'.$service_detail->banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $service_detail->name }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="page-content service-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="photo">
                    <img src="{{ asset('uploads/'.$service_detail->photo) }}" alt="">
                </div>
                <div class="text">
                    <p>
                        {!! nl2br($service_detail->description) !!}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <h2>{{ __('frontend.All Services') }}</h2>
                        <ul>
                            @foreach($services as $item)
                            <li><a href="{{ route('service_detail',$item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
