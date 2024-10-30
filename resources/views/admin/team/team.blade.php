@extends('admin.layouts.master')
@section('title')
<title>{{__('admin.Our Team')}}</title>
@endsection
@section('content')
      <!-- Main Content -->
      <div class="content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Our Team')}}</h1>
          </div>

          <div class="section-body">
            <a href="{{ route('admin.our-team.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{__('admin.Add New')}}</a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>{{__('admin.SN')}}</th>
                                    {{-- <th>{{__('admin.Name')}}</th> --}}
                                    {{-- <th>{{__('admin.Designation')}}</th>--}}
                                    <th>{{__('admin.Image')}}</th> 
                                    <th>{{__('admin.Status')}}</th>
                                    <th>{{__('admin.Action')}}</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $index => $team)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        {{-- <td>{{ $team->teamlangadmin->name }}</td>
                                        <td>{{ $team->teamlangadmin->designation }}</td>--}}
                                        <td><img src="{{ asset($team->image) }}" alt="" class="rounded-circle"></td> 
                                        <td>
                                            @if($team->status == 1)
                                            <a href="javascript:;" onclick="changeFeatureStatus({{ $team->id }})">
                                                <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="{{__('admin.Active')}}" data-off="{{__('admin.InActive')}}" data-onstyle="success" data-offstyle="danger">
                                            </a>
                                            @else
                                            <a href="javascript:;" onclick="changeFeatureStatus({{ $team->id }})">
                                                <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="{{__('admin.Active')}}" data-off="{{__('admin.InActive')}}" data-onstyle="success" data-offstyle="danger">
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.our-team.edit', ['our_team' => $team->id, 'lang_code' => 'en']) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData({{ $team->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

<script>
  "use strict";
    function deleteData(id){
        $("#deleteForm").attr("action",'{{ url("admin/our-team/") }}'+"/"+id)
    }
    function changeFeatureStatus(id){
        var isDemo = "{{ env('APP_MODE') }}"
        if(isDemo == 'DEMO'){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '{{ csrf_token() }}' },
            url:"{{url('/admin/our-team-status/')}}"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){

            }
        })
    }
</script>
@endsection
