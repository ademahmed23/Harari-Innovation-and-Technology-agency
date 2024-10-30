@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1 class="text-primary">{{ __('admin.Event') }} ({{ $event_single->name }}) {{ __('admin.Photo') }}</h1>
                <div>
                    <a href="{{ route('admin.admin_event_index') }}"
                        class="btn btn-primary">{{ __('admin.Back to Event') }}</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <form method="post"
                                    action="{{ route('admin.admin_event_photo_submit', ['id' => $event_single->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="event_id" value="{{ $event_single->id }}">
                                    <div class="form-group mb-3">
                                        <label>{{ __('admin.Select Photo') }}</label>
                                        <div>
                                            <input type="file" name="photo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">{{ __('admin.Submit') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th>{{ __('admin.SL') }}</th>
                                                <th>{{ __('admin.Image') }}</th>
                                                <th>{{ __('admin.Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($event_photos as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><img src="{{ asset('uploads/' . $item->photo) }}" alt=""
                                                            style="width:50px"></td>
                                                    <td class="pt_10 pb_10">
                                                        <a href="{{ Route('admin.admin_event_photo_delete', $item->id) }}"
                                                            class="btn btn-danger"
                                                            onClick="return confirm('{{ __('admin.Are you sure?') }}');"><i
                                                                class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
