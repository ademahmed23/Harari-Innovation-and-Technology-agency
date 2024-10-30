{{-- <section class="fp__team pt_95 xs_pt_65 pb_50">
    <div class="container">

        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                <div class="fp__section_heading mb_25">
                    <h4>{{ @$sectionTitles['chef_top_title'] }}</h4>
                    <h2>{{ @$sectionTitles['chef_main_title'] }}</h2>
                    <span>
                        {{-- <img src="{{ asset('frontend/images/heading_shapes.png') }}" alt="shapes" class="img-fluid w-100"> --}}
                    {{-- </span>
                    <p>{{ @$sectionTitles['chef_sub_title'] }}</p>
                </div>
            </div>
        </div>

        <div class="row team_slider">
            @foreach ($chefs as $chef)
            <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                <div class="fp__single_team">
                    <div class="fp__single_team">
                        <img src="{{ asset($chef->image) }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="fp__single_team_text">
                        <h4>{{ $chef->name }}</h4>
                        <p>{{ $chef->title }}</p>
                        <ul class="d-flex flex-wrap justify-content-center">
                            @if ($chef->fb)
                            <li><a href="{{ $chef->fb }}"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if ($chef->in)
                            <li><a href="{{ $chef->in }}"><i class="fab fa-linkedin-in"></i></a></li>
                            @endif
                            @if ($chef->x)
                            <li><a href="{{ $chef->x }}"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if ($chef->web)
                            <li><a href="{{ $chef->web }}"><i class="fas fa-link"></i></a></li> --}}
                            {{-- <li><a href="{{ $chef->web }}"><i class="fas fa-tiktok"></i></a></li> --}}
                            {{-- @endif
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
####################### --}}

{{-- @if ($our_teem_section->visibility) --}}
<section class="fp__team pt_95 xs_pt_65 pb_50">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 wow m-auto text-center">
                <div class="fp__section_heading mb_20">
                    <h4>{{ @$sectionTitles['chef_top_title'] }}</h5>
                    <h2>{{ @$sectionTitles['chef_main_title'] }}</h2>
                    <span>
                        {{-- <img src="{{ asset('frontend/images/heading_shapes.png') }}" alt="shapes" class="img-fluid w-100"> --}}
                    </span>
                    <p>{{ @$sectionTitles['chef_sub_title'] }}</p>
                </div>
            </div>
        </div>
        <div class="row team_slider">
            @foreach ($chefs as $chef)
            <div class="col-xl-3 col-sm-6 col-lg-4 ">
                <div class="wsus__single_team">
                    {{-- <img src="{{ asset($our_team->image) }}" alt="team" class="img-fluid w-100"> --}}
                    <img src="{{ asset($chef->image) }}" alt="" class="img-fluid w-100">
                    <div class="wsus__single_team_text">
                        <div class="img">
                        <img src="{{ asset($chef->image) }}" alt="" class="img-fluid w-100">

                            {{-- <img src="{{ asset($our_team->image) }}" alt="team" class="img-fluid w-100"> --}}
                        </div>
                        <h3>{{ $chef->name }}</h3>
                        <p>{{ $chef->title }}</p>
                        <ul>
                            @if ($chef->fb)
                            <li><a href="{{ $chef->fb }}"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if ($chef->in)
                            <li><a href="{{ $chef->in }}"><i class="fab fa-linkedin-in"></i></a></li>

                            @endif
                            @if ($chef->x)
                            <li><a href="{{ $chef->x }}"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if ($chef->tlg)
                            <li><a href="{{$chef->tlg}}"><i class="fab fa-telegram"></i></a></li>

                            @endif
                            @if ($chef->t)
                            <li><a href="{{$chef->t}}"><i class="fab fa-tiktok"></i></a></li>

                            @endif
                            @if ($chef->insta)
                            <li><a href="{{$chef->insta}}"><i class="fab fa-instagram"></i></a></li>

                            @endif
                            @if ($chef->web)
                            <li><a href="{{ $chef->web }}"><i class="fas fa-link"></i></a></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- @endif --}}
