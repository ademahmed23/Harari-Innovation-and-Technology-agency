@php
    $maintainance = App\Models\MaintainanceText::first();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
        <title>{{__("frontend.Maintainance")}}</title>

        <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/dev.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

</head>

<body>



    <!--============================
        404 PAGE START
    ==============================-->
    <section id="wsus__404 m-auto">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-10 col-lg-8 col-xxl-6 m-auto">
                    <div class="wsus__404_text">
                        <img width="150px" src="{{ asset($maintainance->image) }}" alt="">
                        <p>{{ $maintainance->description}}</p>
                    {{-- <h4>{{ @$sectionTitles['features_top_title'] }}</h4> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        404 PAGE END
    ==============================-->


</body>

</html>
