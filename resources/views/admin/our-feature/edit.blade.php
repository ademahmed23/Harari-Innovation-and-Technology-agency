@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                {{-- <a href="{{ route('admin.category.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a> --}}
            </div>
            <h1>{{ __('admin.Our Feature') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.our-features.index') }}">{{ __('admin.Our Feature') }}</a></div>
                <div class="breadcrumb-item">{{ __('admin.Update') }}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('admin.Update Feature') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.our-features.update', $ourFeature->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="">{{ __('admin.Language') }}</label>
                                    <select name="language" id="language-select" class="form-control select2">
                                        <option value="">--{{ __('admin.Select') }}--</option>
                                        @foreach ($languages as $lang)
                                            <option value="{{ $lang->lang }}" @selected($lang->lang === $ourFeature->language)>{{ $lang->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('language')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">{{ __('admin.Icon') }} <span class="text-danger">*</span></label>
                                    <div role="iconpicker" data-align="left"
                                         data-selected-class="btn-primary"
                                         data-unselected-class=""
                                         name="icon" data-icon="{{ $ourFeature->icon }}"></div>
                                </div>

                                <div class="form-group">
                                    <label for="">{{ __('admin.Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" value="{{ $ourFeature->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">{{ __('admin.Short Description') }} <span class="text-danger">*</span></label>
                                    <textarea name="short_description" class="form-control summernote">{{ $ourFeature->short_description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">{{ __('admin.Status') }} <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1" @selected($ourFeature->status === 1)>{{ __('admin.Active') }}</option>
                                        <option value="0" @selected($ourFeature->status === 0)>{{ __('admin.Inactive') }}</option>
                                    </select>
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
@endsection
