@extends('admin.layout.app')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1 class="text-primary">Edit Mission</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('admin_mission_edit_submit', ['id' => $mission->id]) }}"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Heading</label>
                                            <input type="text" class="form-control" name="heading" value="{{ $mission->heading }}">
                                        </div> 

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Sub Heading</label>
                                            <input type="text" class="form-control" name="sub_heading" value="{{ $mission->sub_heading }}">
                                        </div> 
                                    </div>
                                </div>
                                 
                                                                  
                                    
                                <div class="form-group mb-3">
                                    <label>Text</label>
                                    <textarea class="form-control editor" cols="30" rows="20" name="text">{{ $mission->text }}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Button Text</label>
                                            <input class="form-control" name="button_text" value="{{ $mission->button_text }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Button Link</label>
                                            <input class="form-control" name="button_link" value="{{ $mission->button_link }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Video Id</label>
                                            <input class="form-control" name="video_id" value="{{ $mission->video_id }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label>Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'. $mission->photo) }}" alt="" class="w_200">
                                    </div>
                                </div>   
                                <div class="form-group mb-3">
                                    <label>New Photo</label>
                                    <div>
                                        <input type="file" name="photo">
                                    </div>
                                </div>  
                                
                                <div class="form-group mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-select" id="">
                                        <option value="Show" @if($mission->status== 'Show') selected @endif >Show</option>
                                        <option value="Hide" @if($mission->status== 'Hide') selected @endif >Hide</option>
                                    </select>
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