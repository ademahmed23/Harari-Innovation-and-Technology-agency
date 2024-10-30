@extends('frontend.layouts.master')

@section('content')
    <section class="fp__breadcrumb" style="background: url({{ asset(config('settings.breadcrumb')) }});">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>{{ __('frontend.Events') }}</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                        <li><a href="javascript:;">{{ __('frontend.Events') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="event pt_70">
        <div class="container">
            <div class="row">
                @foreach ($events as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="fp__single_blog">
                            <div class="fp__single_blog_img">
                                <img src="{{ asset('uploads/' . $item->featured_photo) }}" alt="">
                            </div>
                            <div class="fp__single_blog_text">
                                <h2>
                                    <a class="category" href="{{ route('event', $item->slug) }}">{{ $item->name }}</a>
                                </h2>
                                <div class="date-time">
                                    <i class="fas fa-calendar-alt"></i>
                                    @php
                                        $date = \Carbon\Carbon::parse($item->date)->format('j M, Y');
                                        $time = \Carbon\Carbon::parse($item->time)->format('h:i A');
                                    @endphp
                                    {{ $date }} , {{ $time }}
                                </div>
                                <div class="short-des">
                                    <p>
                                        {!! nl2br($item->short_description) !!}
                                    </p>
                                </div>
                                <div class="button-style-2">
                                    <a href="{{ route('event', $item->slug) }}">{{ __('frontend.Read More') }} <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
