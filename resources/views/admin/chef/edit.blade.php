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
                <form action="{{ route('admin.chefs.update', $chef->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>{{ __('admin.Image') }}</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                            <input type="file" name="image" id="image-upload" />
                            <input type="hidden" name="old_image" value="{{ $chef->image }}"/>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">{{ __('admin.Name') }}</label>
                        <input type="text" class="form-control" name="name" value="{{ $chef->name }}">
                    </div>

                    <div class="form-group">
                        <label for="">{{ __('admin.Title') }}</label>
                        <input type="text" class="form-control" name="title" value="{{ $chef->title }}">
                    </div>

                    <br>
                    <h5>{{ __('admin.Social Links') }}</h5>
                    <div class="form-group">
                        <label for="">{{ __('admin.Facebook') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="fb" value="{{ $chef->fb }}">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.Linkedin') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="in" value="{{ $chef->in }}">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.twitter') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="x" value="{{ $chef->x }}">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.tiktok') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="t">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.telegram') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="tlg">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.instagram') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="insta">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('admin.website') }} <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="web" value="{{ $chef->web }}">
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Show at Home') }}</label>
                        <select name="show_at_home" class="form-control" id="">
                            <option @selected($chef->show_at_home === 0) value="0">{{ __('admin.Yes') }}</option>
                            <option @selected($chef->show_at_home === 1) value="1">{{ __('admin.No') }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Status') }}</label>
                        <select name="status" class="form-control" id="">
                            <option @selected($chef->status === 1) value="1">{{ __('admin.Active') }}</option>
                            <option @selected($chef->status === 0) value="0">{{ __('admin.Inactive') }}</option>
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
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset($chef->image) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
