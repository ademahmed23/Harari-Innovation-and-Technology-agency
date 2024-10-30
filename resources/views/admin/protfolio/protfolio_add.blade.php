@extends('admin.layouts.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Protfolio Page </h4>

            <form method="post" action="{{ route('admin.store.protfolio') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="">{{ __('admin.Language') }}</label>
                    <select name="language" id="language-select" class="form-control select2">
                        <option value="">--{{ __('admin.Select') }}--</option>
                        @foreach ($languages as $lang)
                            <option value="{{ $lang->lang }}">{{ $lang->name }}</option>
                        @endforeach
                    </select>
                    @error('language')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Name</label>
                <div class="col-sm-10">
                    <input name="portfolio_name" class="form-control" type="text" id="example-text-input">
                    @error('portfolio_name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Title </label>
                <div class="col-sm-10">
                    <input name="portfolio_title" class="form-control" type="text" id="example-text-input">

                    @error('portfolio_title')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->
            <h5>{{ __('admin.Social Links') }}</h5>
            <div class="form-group">
                <label for="">{{ __('admin.Facebook') }} <code>(Leave empty for hide)</code></label>
                <input type="text" class="form-control" name="facebook">
            </div>
            <div class="form-group">
                <label for="">{{ __('admin.Linkedin') }} <code>(Leave empty for hide)</code></label>
                <input type="text" class="form-control" name="linkedin">
            </div>
            <div class="form-group">
                <label for="">{{ __('admin.twitter') }} <code>(Leave empty for hide)</code></label>
                <input type="text" class="form-control" name="twitter">
            </div>
            <div class="form-group">
                <label for="">{{ __('admin.tiktok') }} <code>(Leave empty for hide)</code></label>
                <input type="text" class="form-control" name="tiktok">
            </div>
            <div class="form-group">
                <label for="">{{ __("admin.telegram") }} <code>(Leave empty for hide)</code></label>
                <input type="text" class="form-control" name="telegram">
            </div>
            <div class="form-group">
                <label for="">{{ __('admin.instagram') }} <code>(Leave empty for hide)</code></label>
                <input type="text" class="form-control" name="instagram">
            </div>
            <div class="form-group">
                <label for="">{{ __('admin.Website') }} <code>(Leave empty for hide)</code></label>
                <input type="text" class="form-control" name="web">
            </div>



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Description </label>
                <div class="col-sm-10">
      <textarea id="elm1" name="portfolio_description">

      </textarea>
                </div>
            </div>
            <!-- end row -->

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Image </label>
                <div class="col-sm-10">
           <input name="portfolio_image" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Protfolio Data">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection
