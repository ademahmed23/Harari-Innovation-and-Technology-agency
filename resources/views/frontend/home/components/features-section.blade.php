<section id="wsus__features">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 m-auto">
                <div class="wsus__heading_area">
                    <h4>{{ @$sectionTitles['features_top_title'] }}</h4>
                    <h2>{{ @$sectionTitles['features_top_title'] }}</h2>
                    <p>{{ @$sectionTitles['features_sub_title'] }}</p>

                    {{-- <h2>{{ $sectionTitles?->our_feature_title }}</h2>
                    <p>{{ $sectionTitles?->our_feature_sub_title }}</p> --}}
                </div>
            </div>
        </div>
        <div class="row feature_slider">
            @foreach ($ourFeatures as $feature)
            <div class="col-xl-6 col-md-6">
                <div class="wsus__feature_single ">
                    <div class="icon">
                        <i class="{{ $feature->icon }}"></i>
                    </div>
                    <h5>{{ $feature->title }}</h5>
                    <p>{{ $feature->short_description }}</p>
                    <span>{{ ++$loop->index }}</span>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
