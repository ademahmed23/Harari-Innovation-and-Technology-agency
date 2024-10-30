@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Privacy Policy') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Update Privacy Policy') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.privacy-policy.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>{{ __('admin.Content') }}</label>
                        <textarea name="content" class="summernote form-control">{!! @$privacyPolicy->content !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
