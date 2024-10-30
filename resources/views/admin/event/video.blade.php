@extends('admin.layouts.master')

@section('content')
<div class="content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1 class="text-primary">{{ __('admin.Event') }} ({{ $event_single->name }}) {{ __('admin.Video') }}</h1>
            <div>
                <a href="{{ route('admin.admin_event_index') }}" class="btn btn-primary">{{ __('admin.Back to Event') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.admin_event_video_submit', ['id' => $event_single->id]) }}">
                                @csrf
                                <input type="hidden" name="event_id" value="{{ $event_single->id }}">
                                <div class="form-group mb-3">
                                    <label>{{ __('admin.YouTube Video ID') }}</label>
                                    <div>
                                        <input type="text" name="youtube_video_link" required>
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
                                            <th>{{ __('admin.Video Preview') }}</th>
                                            <th>{{ __('admin.Video Id') }}</th>
                                            <th>{{ __('admin.Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($event_videos as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <iframe class="il" width="100" height="auto" src="https://www.youtube.com/embed/{{ $item->youtube_video_id }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </td>
                                            <td>
                                                {{ $item->youtube_video_id }}
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ Route('admin.admin_event_video_delete', $item->id) }}" class="btn btn-danger" onClick="return confirm('{{ __('admin.Are you sure?') }}');"><i class="fas fa-trash"></i></a>
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
    </section>
</div>
@endsection
