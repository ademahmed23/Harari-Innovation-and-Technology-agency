@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Footer Info') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Update Footer Info') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.footer-info.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="language-select">{{ __('admin.Language') }}</label>
                        <select name="language" id="language-select" class="form-control select2">
                            <option value="">{{ __('admin.Select') }}</option>
                            @foreach ($languages as $lang)
                                <option value="{{ $lang->lang }}">{{ $lang->name }}</option>
                            @endforeach
                        </select>
                        @error('language')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('admin.Short Info') }}</label>
                        <textarea name="short_info" class="form-control">{{ @$footerInfo->short_info }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ __('admin.Address') }}</label>
                        <input type="text" name="address" class="form-control" value="{{ @$footerInfo->address }}">
                    </div>
                    <div class="form-group">
                        <label>{{ __('admin.Phone') }}</label>
                        <input type="text" name="phone" class="form-control" value="{{ @$footerInfo->phone }}">
                    </div>
                    <div class="form-group">
                        <label>{{ __('admin.Email') }}</label>
                        <input type="text" name="email" class="form-control" value="{{ @$footerInfo->email }}">
                    </div>
                    <div class="form-group">
                        <label>{{ __('admin.Copyright') }}</label>
                        <input type="text" name="copyright" class="form-control" value="{{ @$footerInfo->copyright }}">
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
