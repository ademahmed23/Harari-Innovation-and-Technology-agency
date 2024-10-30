@extends('admin.layouts.master')

@section('content')
<div class="content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('admin.Events') }}</h1>
            <div>
                <a href="{{ route('admin.admin_event_create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> {{ __('admin.Add New') }}
                </a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>{{ __('admin.SL') }}</th>
                                            <th>{{ __('admin.Featured Photo') }}</th>
                                            <th>{{ __('admin.Name') }}</th>
                                            <th>{{ __('admin.Date & Time') }}</th>
                                            <th>{{ __('admin.Price') }}</th>
                                            <th>{{ __('admin.Total Seat') }}</th>
                                            <th>{{ __('admin.Booked Seat') }}</th>
                                            <th>{{ __('admin.Options') }}</th>
                                            <th>{{ __('admin.Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$item->featured_photo) }}" alt="" style="width: 40px">
                                            </td>
                                            <td>
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ $item->date }} <br>
                                                {{ $item->time }}
                                            </td>
                                            <td>
                                                {{ $item->price }}
                                            </td>
                                            <td>
                                                {{ $item->total_seat }}
                                            </td>
                                            <td>
                                                {{ $item->booked_seat }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.admin_event_photo', $item->id) }}" class="btn btn-primary btn-sm w_50_p mb_5">{{ __('admin.Photo Gallery') }}</a>
                                                <a href="{{ route('admin.admin_event_video', $item->id) }}" class="btn btn-success btn-sm w_50_p mb_5">{{ __('admin.Video Gallery') }}</a>
                                                <a href="{{ route('admin.admin_event_tickets', $item->id) }}" class="btn btn-warning btn-sm w_50_p">{{ __('admin.Tickets') }}</a>
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin.admin_event_edit', $item->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('admin.admin_event_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('{{ __('admin.Are you sure?') }}');">
                                                    <i class="fas fa-trash"></i>
                                                </a>
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
