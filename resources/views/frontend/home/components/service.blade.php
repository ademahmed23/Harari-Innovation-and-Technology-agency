@if($page_data->service_status == 'Show')
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>Services</h2>
                <h3>{{ __('frontend.What Services We Offer')}}</h3>
            </div>
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
                        <a href="{{ route('service_detail',$item->slug) }}" class="btn btn-primary">{{__('frontend.Read More')}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif