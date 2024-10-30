@extends('admin.master_layout')
@section('title')
<title>{{__('admin.Edit team')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Edit team')}}</h1>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.our-team.index') }}" class="btn btn-primary"><i class="fas fa-list"></i> {{__('admin.Our team')}}</a>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="h3 mb-3 text-gray-800">{{__('admin.Language')}}</h3>
                        <hr>
                        <div class="lang_list_top">
                            <ul class="lang_list">
                                @foreach ($languages as $language)
                                <li><a href="{{ route('admin.our-team.edit', ['our_team' => $team->id, 'lang_code' => $language->lang_code]) }}"><i class="fas fa-edit"></i> {{ $language->lang_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="alert alert-danger mt-2" role="alert">
                            @php
                                $current_language = App\Models\Language::where('lang_code', request()->get('lang_code'))->first();
                            @endphp
                            <p>{{__('admin.Your editing mode')}} : <b>{{ $current_language->lang_name }}</b></p> 
                        </div> 
                      </div>
                    </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.our-team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="lang_code" value="{{ request()->get('lang_code') }}">

                            <div class="row">
                                @if(session()->get('admin_lang') == request()->get('lang_code'))
                                <div class="form-group col-12">
                                    <label>{{__('admin.Existing Image')}}</label>
                                    <div>
                                        <img src="{{ asset($team->image) }}" alt="" width="150px">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Image')}} <span class="text-danger">*</span></label>
                                    <input type="file" id="title" class="form-control-file"  name="image">
                                </div>
                                @endif
                                <div class="form-group col-12">
                                    <label>{{__('admin.Name')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control"  name="name" value="{{ $team_language->name }}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Desgination')}} <span class="text-danger">*</span></label>
                                    <input type="text" id="designation" class="form-control"  name="designation" value="{{ $team_language->designation }}">
                                </div>

                                @if(session()->get('admin_lang') == request()->get('lang_code'))
                                <div class="form-group col-12">
                                    <label>{{__('admin.Facebook')}}</label>
                                    <input type="text" class="form-control"  name="facebook" value="{{ $team->facebook }}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Twitter')}}</label>
                                    <input type="text" class="form-control"  name="twitter" value="{{ $team->twitter }}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Linkedin')}}</label>
                                    <input type="text" class="form-control"  name="linkedin" value="{{ $team->linkedin }}">
                                </div>

                                <div class="form-group col-12">
                                    <label>{{__('admin.Status')}} <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option  {{ $team->status == 1 ? 'selected' : '' }} value="1">{{__('admin.Active')}}</option>
                                        <option  {{ $team->status == 0 ? 'selected' : '' }} value="0">{{__('admin.Inactive')}}</option>
                                    </select>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary">{{__('admin.Update')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
@endsection
