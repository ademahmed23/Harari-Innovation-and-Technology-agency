@extends('admin.layouts.master')


@section('content')
<div class="content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1 class="text-primary">Features</h1>
            <div>
                <a href="{{ route('admin.admin_feature_create') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Icon</th>
                                            <th>Heading</th>
                                            {{-- <th>Description</th> --}}
                                            <th>Action</th>
                         `               </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($features as $feature)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <i class="{{ $feature->icon }}" style="font-size: 30px"></i>
                                            </td>
                                            <td>{{ $feature->heading }}</td>
                                            {{-- <td>{{ $slider->text }}</td> --}}
                                            <td class="pt_10 pb_10">
                                                <a href="{{ Route('admin.admin_feature_edit', $feature->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="{{ Route('admin.admin_feature_delete', $feature->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Section Items</h4>
                            <form method="POST" action="{{ route('admin.admin_feature_section_update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$feature_section_items->photo) }}" alt="" style="width:100%;">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Change Photo</label>
                                    <input type="file" name="photo">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Status*</label>
                                    <select name="status" class="form-select">
                                        <option value="Show" @if($feature_section_items->status =='Show') selected @endif>Show</option>
                                        <option value="Hide" @if($feature_section_items->status =='Hide') selected @endif>Hide</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</div>

@endsection
