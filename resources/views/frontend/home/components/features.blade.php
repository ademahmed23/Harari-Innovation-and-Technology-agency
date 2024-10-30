<div class="wsus__banner" style="background: url({{ asset(@$hero->background) }});">
    <div class="container">
        <div class="row">
            @foreach ($features as $feature)
            <div class="col-md-4">
                <div class="inner pb_70">
                    <div class="icon">
                        <i class="{{ $feature->icon }}"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $feature->heading }}</h2>
                        <p>
                            {!! $feature->text !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- <section id="wsus__banner" style="background: url({{ asset(config('settings.breadcrumb')) }})">
    <div class="wsus__banner_overlay">
        <div class="container">
            <div class="row justify-content-between">
                @foreach ($features as $feature)

                <div class="icon">
                    <i class="{{ $feature->icon }}"></i>
                </div>
                <div class="wsus__banner_text">
                    <h2>{{ $feature->heading }}</h2>
                    <p>
                        {!! $feature->text !!}
                    </p>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}
