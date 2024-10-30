
<section class="fp__blog fp__blog2">
    <div class="fp__blog_overlay pt_95 pt_xs_60 pb_100 xs_pb_70">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                    <div class="fp__section_heading mb_25">
                        <h4>{{ __('frontend.Upcoming Events')}}</h4>
                        <h2>{{__('frontend.Training')}}</h2>
                        <span>
                            <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                        </span>
                    </div>
                </div>
            </div>
        

        <div class="row">
            @foreach($events as $item)
            @php
            $current_timestamp = strtotime(date('Y-m-d H:i'));
            $event_timestamp = strtotime($item->date.' '.$item->time);
            @endphp

            @if($event_timestamp < $current_timestamp)
            @continue
            @endif
            <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp">
                <div class="fp__single_blog">
                    <div class="fp__single_blog_img">
                        <img src="{{ asset('uploads/'.$item->featured_photo) }}" alt="">
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
                            {{ $date }}, {{ $time }}
                        </div>
                        <div class="title">
                            <p>
                                {!! nl2br($item->short_description) !!}
                            </p>
                        </div>
                        <div class="button-style-2">
                            <a href="{{ route('event', $item->slug) }}">{{( __('frontend.Read More'))}} <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> 
