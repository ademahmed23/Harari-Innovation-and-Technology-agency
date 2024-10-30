@extends('admin.layouts.master')

@section('heading', 'View Services')

@section('rightside_button')
<a href="{{ route('admin.admin_service_add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Services</h1>
        </div>


        <div class="card card-primary">
            <div class="card-header">
                <h4>All Services</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.admin_service_add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
                </div></div>
         <div class="card-body">
         <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Banner</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="" style="width: 100%; height:60px">
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$item->banner) }}" alt="" style="width: 50px">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin.admin_service_edit',$item->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.admin_service_delete',$item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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
@endsection