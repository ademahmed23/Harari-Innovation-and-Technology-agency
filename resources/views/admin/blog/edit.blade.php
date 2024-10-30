@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Blog') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ 'admin.Update Blog' }}</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">{{ __('admin.Language') }}</label>
                        <select name="language" id="language-select" class="form-control select2">
                            <option value="">--{{ __('admin.Select') }}--</option>
                            @foreach ($languages as $lang)
                                <option {{ $lang->lang === $blog->language ? 'selected' : '' }} value="{{ $lang->lang }}">
                                    {{ $lang->name }}</option>
                            @endforeach
                        </select>
                        @error('language')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('admin.Image') }}</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                            <input type="file" name="image" id="image-upload" />
                            <input type="hidden" name="old_image" value="{{ $blog->image }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Title') }}</label>
                        <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Category') }}</label>
                        <select name="category" class="form-control select2" id="">
                            <option value="">{{ __('admin.select') }}</option>
                            @foreach ($categories as $category)
                                <option @selected($category->id === $blog->category_id) value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label>{{ __('admin.Description') }}</label>
                        <textarea name="description" class="form-control summernote" id="">{!! $blog->description !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Seo Title') }}</label>
                        <input type="text" name="seo_title" class="form-control" value="{{ $blog->seo_title }}">
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Seo Description') }}</label>
                        <textarea name="seo_description" class="form-control" id="">{{ $blog->seo_description }}</textarea>
                    </div>


                    <div class="form-group">
                        <label>{{ __('admin.Status') }}</label>
                        <select name="status" class="form-control" id="">
                            <option @selected($blog->status === 1) value="1">{{ __('admin.Active') }}</option>
                            <option @selected($blog->status === 0) value="0">{{ __('admin.Inactive') }}</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.image-preview').css({
                'background-image': 'url({{ asset($blog->image) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
