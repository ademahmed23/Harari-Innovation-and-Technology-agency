@extends('admin.layout.app')

@section('heading', 'Video Gallery for "'.$single_portfolio->name.'"')

@section('rightside_button')
<a href="{{ route('admin_portfolio_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Back to previous</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-8">
            <h5>All Photos</h5>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Video Preview</th>
                                    <th>Caption</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($video_gallery_items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="video-iframe-container1">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </td>
                                    <td>{{ $item->caption }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_portfolio_video_gallery_delete',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h5>Add Photo</h5>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_portfolio_video_gallery_submit') }}" method="post">
                        @csrf
                        <input type="hidden" name="portfolio_id" value="{{ $single_portfolio->id }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Caption *</label>
                                    <input type="text" class="form-control" name="caption" value="{{ old('caption') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Video Id *</label>
                                    <input type="text" class="form-control" name="video_id" value="{{ old('video_id') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection