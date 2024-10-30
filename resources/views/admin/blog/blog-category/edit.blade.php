@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Blog Categories') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Update Blog Category') }}</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.blog-category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">{{ __('admin.Language') }}</label>
                        <select name="language" id="language-select" class="form-control select2">
                            <option value="">--{{ __('admin.Select') }}--</option>
                            @foreach ($languages as $lang)
                                <option {{ $lang->lang === $category->language ? 'selected' : '' }} value="{{ $lang->lang }}">{{ $lang->name }}</option>
                            @endforeach
                        </select>
                        @error('language')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.Name') }}</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>


                    <div class="form-group">
                        <label>{{ __('admin.Status') }}</label>
                        <select name="status" class="form-control" id="">
                            <option @selected($category->status === 1) value="1">{{ __('admin.Active') }}</option>
                            <option @selected($category->status === 0) value="0">{{ __('admin.Inactive') }}</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
