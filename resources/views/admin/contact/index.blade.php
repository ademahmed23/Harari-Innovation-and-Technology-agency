@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Contact</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Updated Contact</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.contact.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                        <label>{{ __('admin.Image') }}</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                            <input type="file" name="image" id="image-upload" />
                            <input type="hidden" name="old_image" value="{{ @$contact->image }}" />
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label>{{ __('admin.Title') }}</label>
                        <input type="text" name="title" class="form-control" value="{{ @$contact->title }}">
                    </div> --}}
                    <div class="form-group">
                        <label>{{ __('admin.Support Title') }}</label>
                        <input type="text" name="support_title" class="form-control" value="{{ @$contact->support_title }}">
                    </div>
                    <div class="form-group">
                        <label>{{ __('admin.Open Time') }}</label>
                        <input type="text" name="time" class="form-control" value="{{ @$contact->time }}">
                    </div>

                    <div class="form-group">
                        <label>{{ __('admin.Off-Day') }}</label>
                        <input type="text" name="off_day" class="form-control" value="{{ @$contact->off_day }}">
                    </div>

                    <div class="form-group">
                        <label for="">Phone One</label>
                        <input type="text" class="form-control" name="phone_one" value="{{ @$contact->phone_one }}">
                    </div>


                    <div class="form-group">
                        <label for="">Phone Two</label>
                        <input type="text" class="form-control" name="phone_two" value="{{ @$contact->phone_two }}">
                    </div>

                    <div class="form-group">
                        <label for="">Email One</label>
                        <input type="text" class="form-control" name="mail_one" value="{{ @$contact->mail_one }}">
                    </div>

                    <div class="form-group">
                        <label for="">Email Two</label>
                        <input type="text" class="form-control" name="mail_two" value="{{ @$contact->mail_two }}">
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ @$contact->address }}">
                    </div>

                    <div class="form-group">
                        <label for="">Google Map Link</label>
                        <input type="text" class="form-control" name="map_link" value="{{ @$contact->map_link }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
