@extends('admin.layouts.master')

@section('content')
<div class="content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1 class="text-primary">Edit Feature</h1>
            <div>
                <a href="{{ route('admin.admin_feature_index') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.admin_feature_edit_submit', ['id' => $feature->id]) }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Icon</label>
                                    <input type="text" class="form-control" name="icon" value="{{ $feature->icon }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="heading" value="{{ $feature->heading }}">
                                </div>

                                {{-- <div class="form-group mb-3">
                                    <label>Text</label>
                                    <textarea class="form-control editor" cols="30" rows="20" name="text">{{ $feature->text }}</textarea>
                                </div> --}}
                                <div class="form-group">
                                    <label>{{ __('admin.Text') }}</label>
                                    <textarea name="text" class="form-control summernote" id="">{{ $feature->text }}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
