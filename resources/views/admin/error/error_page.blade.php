@extends('admin.layouts.master')
{{-- @section('title')
<title>{{__('admin.Error Page')}}</title>
@endsection --}}
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Error Page') }}</h1>
        </div>
        <!-- Main Content -->
        <div class="card card-primary">
            <div class="">
                <div class="section-header">
                    <h4>{{ __('admin.Error Page') }}</h4>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a
                                href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                        <div class="breadcrumb-item">{{ __('admin.Error Page') }}</div>
                    </div>
                </div>

                <div class="section-body">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{ route('admin.error-page.update', $errorpage->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label for="">{{ __('admin.Icon two') }}</label>
                                                    <div>
                                                        <img class="error_404" src="{{ asset($errorpage->image) }}"
                                                            alt="">
                                                    </div>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label for="">{{ __('admin.New icon') }}</label>
                                                    <input type="file" name="image" class="form-control-file">
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">{{ __('admin.Title') }}</label>
                                                        <input type="text" name="title" class="form-control"
                                                            value="{{ $errorpage->title }}">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">{{ __('admin.Button Text') }}</label>
                                                        <input type="text" name="button_text" class="form-control"
                                                            value="{{ $errorpage->button_text }}">
                                                    </div>
                                                </div>


                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary">{{ __('admin.Update') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    @endsection
