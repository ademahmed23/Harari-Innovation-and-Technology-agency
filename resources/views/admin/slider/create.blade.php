@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{('admin.Slider')}}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{__('admin.Create Slider')}}</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{{__('admin.Image')}}</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">{{__('admin.Choose File')}}</label>
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
                    <label>{{__('admin.Offer')}}</label>
                    <input type="text" name="offer" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{__('admin.Title')}}</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{__('admin.Sub Title')}}</label>
                    <input type="text" name="sub_title" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{__('admin.Short Description')}}</label>
                    <textarea name="short_description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>{{__('admin.Button Link')}}</label>
                    <input type="text" name="button_link" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{__('admin.Status')}}</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">{{__('admin.Yes')}}</option>
                        <option value="0">{{__('admin.No')}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">{{__('admin.Create')}}</button>
            </form>
        </div>
    </div>
</section>
@endsection
