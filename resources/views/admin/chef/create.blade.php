@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Team') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Create Team') }}</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.chefs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('admin.Image') }}</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                            <input type="file" name="image" id="image-upload" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.Language') }}</label>
                        <select name="language" id="language-select" class="form-control select2">
                            <option value="">--{{ __('admin.Select') }}--</option>
                            @foreach ($languages as $lang)
                                <option value="{{ $lang->lang }}">{{ $lang->name }}</option>
                            @endforeach
                        </select>
                        @error('language')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="">{{ __('admin.Name') }}</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">{{ __('admin.Title') }}</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <br>
                    <h5>{{ __('admin.Social Links') }}</h5>
                    <div class="form-group">
                        <label for="">{{ __('admin.Facebook') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="fb">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.Linkedin') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="in">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.X') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="x">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.tiktok') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="t">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __("admin.telegram") }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="tlg">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.instagram') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="insta">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.Website') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="web">
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Show at Home') }}</label>
                        <select name="show_at_home" class="form-control" id="">
                            <option value="0">{{ __('admin.No') }}</option>
                            <option value="1">{{ __('admin.Yes') }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Status') }}</label>
                        <select name="status" class="form-control" id="">
                            <option value="1">{{ __('admin.Active') }}</option>
                            <option value="0">{{ __('admin.Inactive') }}</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">{{ __('admin.Create') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
