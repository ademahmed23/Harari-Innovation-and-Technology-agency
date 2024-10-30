@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('admin.Features') }}</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <div id="accordion">
                <div class="accordion">
                    <div class="accordion-header collapsed bg-primary text-light p-3 " role="button"
                        data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                        <h4>{{ __('admin.Our Features Title') }}</h4>
                    </div>
                    <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion" style="">
                        <form action="{{ route('admin.features-title-update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">{{ __('admin.Top Title') }}</label>
                                <input type="text" class="form-control" name="features_top_title" value="{{ @$titles['features_top_title'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">{{ __('admin.Main Title') }}</label>
                                <input type="text" class="form-control" name="features_main_title" value="{{ @$titles['features_main_title'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">{{ __('admin.Sub Title') }}</label>
                                <input type="text" class="form-control" name="features_sub_title" value="{{ @$titles['features_sub_title'] }}">
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('admin.Save') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>{{ __('admin.Our Feature') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                <div class="breadcrumb-item">{{ __('admin.Our Feature') }}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('admin.All Features') }}</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.our-features.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('admin.Create') }}</a>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $dataTable->table() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
