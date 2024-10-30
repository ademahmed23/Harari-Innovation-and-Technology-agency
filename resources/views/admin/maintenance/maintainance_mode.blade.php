@extends('admin.layouts.master')
{{-- @section('title')
<title>{{__('admin.Maintainance Mode')}}</title>
@endsection --}}
@section('content')
      <!-- Main Content -->
      {{-- <div class="main-content"> --}}
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Maintainance Mode')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Maintainance Mode')}}</div>
            </div>
          </div>

          <div class="card card-primary">
            {{-- <div class="card-header">
                <h4>{{ __('admin.Maintenance Mode') }}</h4>

            </div> --}}
                {{-- <div class="col">
                  <div class="card"> --}}
                    <div class="card-body">
                        <form action="{{ route('admin.maintainance-mode-update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="">{{__('admin.Maintainance Mode')}}</label>
                                <div>
                                    @if ($maintainance->status == 1)
                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="{{__('admin.Enable')}}" data-off="{{__('admin.Disable')}}" data-onstyle="success" data-offstyle="danger" name="maintainance_mode">
                                        @else
                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="{{__('admin.Enable')}}" data-off="{{__('admin.Disable')}}" data-onstyle="success" data-offstyle="danger" name="maintainance_mode">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">{{__('admin.Existing Image')}}</label>
                                <div>
                                    <img src="{{ asset($maintainance->image) }}" width="200px" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">{{__('admin.New Image')}}</label>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                            <div class="form-group">
                                <label for="">{{__('admin.Description')}}</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control text-area-5">{{ $maintainance->description }}</textarea>
                            </div>

                            <button class="btn btn-primary" type="submit">{{__('admin.Update')}}</button>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      {{-- </div> --}}
@endsection
s
