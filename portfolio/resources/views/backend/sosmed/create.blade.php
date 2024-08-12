@extends('backend.layouts.master')
@section('title','E-SHOP || Sosial Media Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add Sosial Media</h5>
    <div class="card-body">
      <form method="post" action="{{route('sosmed.store')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputTitle" class="col-form-label">Nama Sosial Media<span class="text-danger">*</span></label>
          <input id="nama_sosmed" type="text" name="nama_sosmed" placeholder="ex. Facebook,Instagram,Twitter,Dribble,etc."  class="form-control">
          @error('nama_sosmed')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>

          <div class="form-group">
            <label for="inputTitle" class="col-form-label">Class Sosial Media<span class="text-danger">*</span></label>
          <input id="class_sosmed" type="text" name="class_sosmed" placeholder="ex. facebook,instagram,twitter,dribble,etc."  class="form-control">
          @error('class_sosmed')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>

          <div class="form-group">
              <label for="inputTitle" class="col-form-label">URL Link <span class="text-danger">*</span></label>
            <input id="url" type="text" name="url" placeholder="Enter URL"  class="form-control">
            @error('url')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
              <label for="inputPhoto" class="col-form-label">Photo</label>
              <div class="input-group">
                  <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                      <i class="fa fa-picture-o"></i> Choose
                      </a>
                  </span>
              <input id="thumbnail" class="form-control" type="text" name="photo">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
              @error('photo')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            
            <!-- {{--  <div class="form-group">
                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                <select name="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>  --}} -->
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>

<script>
  $('#end_pendidikan').change(function(){
    var is_checked=$('#end_pendidikan').prop('checked');
    // alert(is_checked);
    if(is_checked){
      $('#parent_cat_div').addClass('d-none');
      $('#parent_cat_div').val('');
    }
    else{
      $('#parent_cat_div').removeClass('d-none');
    }
  })
</script>

@endpush
