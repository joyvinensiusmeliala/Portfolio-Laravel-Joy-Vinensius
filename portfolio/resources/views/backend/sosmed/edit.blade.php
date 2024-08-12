@extends('backend.layouts.master')
@section('title','E-SHOP || Sosial Media Edit')
@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Sosial Media</h5>
    <div class="card-body">
      <form method="post" action="{{route('sosmed.update',$sosmed->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Nama Sosial Media<span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="nama_sosmed" placeholder="ex. Instgram,Facebook,Twitter"  value="{{$sosmed->nama_sosmed}}" class="form-control">
        @error('nama_sosmed')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Class Sosial Media<span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="class_sosmed" placeholder="ex. instgram,facebook,twitter"  value="{{$sosmed->class_sosmed}}" class="form-control">
        @error('class_sosmed')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputTitle" class="col-form-label">URL Link <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="url" placeholder="Enter URL"  value="{{$sosmed->url}}" class="form-control">
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
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$sosmed->photo}}">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
            @error('photo')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

        
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
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
  $('#status').change(function(){
    var is_checked=$('#status').prop('checked');
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
