@extends('admin.layouts.master')

@section('content')
<div class="content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1 class="text-primary">{{ __('admin.Add Event') }}</h1>
            <div>
                <a href="{{ route('admin.admin_event_create') }}" class="btn btn-primary">{{ __('admin.Add New') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.admin_event_create_submit') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>{{ __('admin.Featured Photo') }}*</label>
                                    <div>
                                        <input type="file" name="featured_photo">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Name') }}*</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Slug') }}*</label>
                                            <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Location') }}*</label>
                                            <input type="text" class="form-control" name="location" value="{{ old('location') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Date') }}*</label>
                                            <input id="datepicker" type="text" class="form-control" name="date" value="{{ old('date') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Time') }}*</label>
                                            <input id="timepicker" type="text" class="form-control" name="time" value="{{ old('time') }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Total Seat') }}</label>
                                            <input type="text" class="form-control" name="total_seat" value="{{ old('total_seat') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Price') }}*</label>
                                            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Map') }}</label>
                                            <textarea class="form-control h_100" cols="30" rows="10" name="map">{{ old('map') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Short Description') }}*</label>
                                            <textarea class="form-control h_100" cols="30" rows="10" name="short_description">{{ old('short_description') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label>{{ __('admin.Description') }}*</label>
                                    <textarea class="form-control editor h_100" cols="30" rows="10" name="description">{{ old('description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">{{ __('admin.Submit') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
