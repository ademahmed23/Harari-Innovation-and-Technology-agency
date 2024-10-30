@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Profile') }}</h1>
        </div>

        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('admin.Update User Settings') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                                <input type="file" name="avatar" id="image-upload" value="{{ $user->image }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('admin.Name') }}</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>{{ __('admin.Email') }}</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email}}">
                        </div>
                        <button class="btn btn-primary" type="submit">{{ __('admin.Save') }}</button>
                    </form>
                </div>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('admin.Update Password') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.password.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>{{ __('admin.Current Password') }}</label>
                            <input type="password" class="form-control" name="current_password">
                        </div>

                        <div class="form-group">
                            <label>{{ __('admin.New Password') }}</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label>{{ __('admin.Confirm Password') }}</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>

                        <button class="btn btn-primary" type="submit">{{ __('admin.Save') }}</button>

                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset(auth()->guard('admin')->user()->avatar) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            });
        });
    </script>
@endpush
