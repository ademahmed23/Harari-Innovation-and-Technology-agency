@extends('admin.layouts.master')

@section('content')
<div class="content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1 class="text-primary">{{ __('admin.Edit Event') }}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.admin_event_edit_submit', ['id' => $event->id]) }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                    <label>{{ __('admin.Existing Photo') }}</label>
                                    <div>
                                        <img src="{{ asset('uploads/'. $event->featured_photo) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>{{ __('admin.New Photo') }}</label>
                                    <div>
                                        <input type="file" name="photo">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Name') }}*</label>
                                            <input type="text" class="form-control" name="name" value="{{ $event->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Slug') }}*</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $event->slug }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Location') }}*</label>
                                            <input type="text" class="form-control" name="location" value="{{ $event->location }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Date') }}*</label>
                                            <input type="text" id="datepicker" class="form-control" name="date" value="{{ $event->date }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Time') }}*</label>
                                            <input type="text" id="timepicker" class="form-control" name="time" value="{{ $event->time }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Total Seat') }}</label>
                                            <input type="text" class="form-control" name="total_seat" value="{{ $event->total_seat }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Price') }}*</label>
                                            <input type="text" class="form-control" name="price" value="{{ $event->price }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Map') }}</label>
                                            <textarea class="form-control h_100" cols="30" rows="10" name="map">{{ $event->map }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>{{ __('admin.Short Description') }}*</label>
                                            <textarea class="form-control h_100" cols="30" rows="10" name="short_description">{{ $event->short_description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label>{{ __('admin.Description') }}*</label>
                                    <textarea class="form-control editor h_100" cols="30" rows="10" name="description">{{ $event->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
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
