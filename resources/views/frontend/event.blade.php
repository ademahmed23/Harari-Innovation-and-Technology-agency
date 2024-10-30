@extends('frontend.layouts.master')

@section('content')
<div class="content">
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
    <div class="event-detail pt_50 pb_50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="left-item">
                        <div class="main-photo">
                            <img src="{{ asset('uploads/'.$event->featured_photo) }}" alt="">
                        </div>
                        <h2>{{ __('frontend.Description') }}</h2>
                        {!! $event->description !!}
                    </div>
                    <div class="left-item">
                        <h2>{{ __('frontend.Photos') }}</h2>
                        <div class="photo-all">
                            <div class="row">
                                @foreach($event_photos as $item)
                                <div class="col-md-4 col-md-4">
                                    <div class="item">
                                        <a href="{{ asset('uploads/'.$item->photo) }}" class="magnific">
                                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="" />
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="bg"></div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="left-item">
                        <h2>{{ __('frontend.Videos') }}</h2>
                        <div class="video-all">
                            <div class="row">
                                @foreach($event_videos as $item)
                                <div class="col-md-6 col-lg-4">
                                    <div class="item">
                                        <a class="video-button" href="http://www.youtube.com/watch?v={{ $item->youtube_video_id }}">
                                            <img src="http://img.youtube.com/vi/{{ $item->youtube_video_id }}/0.jpg" alt="" />
                                            <div class="icon">
                                                <i class="far fa-play-circle"></i>
                                            </div>
                                            <div class="bg"></div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="right-item">
                        @php
                        $current_timestamp = strtotime(date('Y-m-d H:i'));
                        $event_timestamp = strtotime($event->date.' '.$event->time);
                        @endphp

                        @if($event_timestamp > $current_timestamp)
                        <div class="countdown show" data-Date='{{ $event->date }} {{ $event->time }}'>
                            <div class="boxes running">
                                <div class="box">
                                    <div class="num"><timer><span class="days"></span></timer></div>
                                    <div class="name">{{ __('frontend.Days') }}</div>
                                </div>
                                <div class="box">
                                    <div class="num"><timer><span class="hours"></span></timer></div>
                                    <div class="name">{{ __('frontend.Hours') }}</div>
                                </div>
                                <div class="box">
                                    <div class="num"><timer><span class="minutes"></span></timer></div>
                                    <div class="name">{{ __('frontend.Minutes') }}</div>
                                </div>
                                <div class="box">
                                    <div class="num"><timer><span class="seconds"></span></timer></div>
                                    <div class="name">{{ __('frontend.Seconds') }}</div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="text-danger"><b>{{ __('frontend.Event Date is Over!') }}</b></div>
                        @endif

                        <h2 class="mt_30">{{ __('frontend.Event Information') }}</h2>
                        <div class="summary">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    @if($event->price != 0)
                                    <tr>
                                        <td><b>{{ __('frontend.Ticket Price') }}</b></td>
                                        <td class="price">${{ $event->price }}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td><b>{{ __('frontend.Location') }}</b></td>
                                        <td>{{ $event->location }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('frontend.Date') }}</b></td>
                                        <td>{{ $event->date }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('frontend.Time') }}</b></td>
                                        <td>{{ $event->time }}</td>
                                    </tr>
                                    @if($event->total_seat != '')
                                    <tr>
                                        <td><b>{{ __('frontend.Total Seat') }}</b></td>
                                        <td>{{ $event->total_seat }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('frontend.Booked') }}</b></td>
                                        <td>
                                            @if($event->booked_seat == '')
                                            0
                                            @else
                                            {{ $event->booked_seat }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>{{ __('frontend.Remaining') }}</b></td>
                                        <td>
                                            @php
                                            $remaining = $event->total_seat - $event->booked_seat;
                                            @endphp
                                            {{ $remaining }}
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td><b>{{ __('frontend.Booked') }}</b></td>
                                        <td>
                                            @if($event->booked_seat == '')
                                            0
                                            @else
                                            {{ $event->booked_seat }}
                                            @endif
                                        </td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                        </div>

                        @if($event_timestamp > $current_timestamp)
                            @if($event->price != 0)
                            <h2 class="mt_30">{{ __('frontend.Buy Ticket') }}</h2>
                            <div class="pay-sec">
                                <form action="{{ route('event_ticket_payment') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="unit_price" value="{{ $event->price }}">
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                    <select name="number_of_tickets" class="form-select mb_15">
                                        <option value="">{{ __('frontend.How many tickets?') }}</option>
                                        @for($i=1; $i<=5; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <select name="payment_method" class="form-select mb_15">
                                        <option value="">{{ __('frontend.Select Payment Method') }}</option>
                                        <option value="paypal">{{ __('frontend.PayPal') }}</option>
                                        <option value="stripe">{{ __('frontend.Stripe') }}</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary w-100-p pay-now">{{ __('frontend.Make Payment') }}</button>
                                </form>
                            </div>
                            @endif

                            @if($event->price == 0)
                            <h2 class="mt_30">{{ __('frontend.Free Booking') }}</h2>
                            <div class="pay-sec">
                                <form action="{{ route('event_ticket_free_booking') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="unit_price" value="{{ $event->price }}">
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                    <select name="number_of_tickets" class="form-select mb_15">
                                        <option value="">{{ __('frontend.How many tickets?') }}</option>
                                        @for($i=1; $i<=5; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <button type="submit" class="btn btn-primary w-100-p pay-now">{{ __('frontend.Book Now') }}</button>
                                </form>
                            </div>
                            @endif
                        @endif

                        @if($event->map != '')
                        <h2 class="mt_30">{{ __('frontend.Event Map') }}</h2>
                        <div class="location-map">
                            {{ $event->map }}
                        </div>
                        @endif

                        <h2 class="mt_30">{{ __('frontend.Recent Events') }}</h2>
                        <ul>
                            @foreach($recent_events as $item)
                            <li><a href="{{ route('event',$item->slug) }}"><i class="fas fa-angle-right"></i> {{ $item->name }}</a></li>
                            @endforeach
                        </ul>

                        <h2 class="mt_30">{{ __('frontend.Event Enquery') }}</h2>
                        <div class="enquery-form">
                            <form action="{{ route('event_send_message') }}" method="post">
                                @csrf
                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                <div class="mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="{{ __('frontend.Full Name') }}" required>
                                </div>
                                <div class="mb-3">
                                    <input name="email" type="email" class="form-control" placeholder="{{ __('frontend.Email Address') }}" required>
                                </div>
                                <div class="mb-3">
                                    <input name="phone" type="text" class="form-control" placeholder="{{ __('frontend.Phone Number (Optional)') }}">
                                </div>
                                <div class="mb-3">
                                    <textarea name="message" class="form-control h-150" rows="3" placeholder="{{ __('frontend.Message') }}" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('frontend.Send Message') }} <i class="fas fa-long-arrow-alt-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
