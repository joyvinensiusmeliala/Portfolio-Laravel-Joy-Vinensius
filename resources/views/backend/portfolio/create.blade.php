@extends('backend.layouts.master')
@section('title','Portfolio || Create Portfolio')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add pekerjaan</h5>
    <div class="card-body">
      <form method="post" action="{{route('portfolio.store')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputTitle" class="col-form-label">Nama Project <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="nama_project" placeholder="Enter Nama project" class="form-control">
          @error('nama_project')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>

          <div class="form-group">
              <label for="inputTitle" class="col-form-label">Penyelenggara <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="penyelenggara" placeholder="Enter Penyelenggara"  class="form-control">
            @error('penyelenggara')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
                <label for="inputTitle" class="col-form-label">Deskripsi Project <span class="text-danger">*</span></label>
              <input id="inputTitle" type="textarea" name="deskripsi" placeholder="Enter Deskripsi Project" class="form-control">
              @error('deskripsi')
              <span class="text-danger">{{$message}}</span>
              @enderror
              </div>

            <div class="form-group">
                <label for="inputTitle" class="col-form-label">Lokasi <span class="text-danger">*</span></label>
              <input id="inputTitle" type="text" name="lokasi" placeholder="Enter Lokasi" class="form-control">
              @error('lokasi')
              <span class="text-danger">{{$message}}</span>
              @enderror
              </div>

            <div class="form-group">
              <label for="inputTitle" class="col-form-label">Tools <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="tools" placeholder="Enter Tools" class="form-control">
            @error('tools')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
              <label for="inputTitle" class="col-form-label">Sebagai<span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="sebagai" placeholder="Enter Sebagai" class="form-control">
            @error('sebagai')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

          <div class="form-group">
          <label for="category" class="col-form-label">Category <span class="text-danger">*</span></label>
          <select name="category" class="form-control">
              <option value="1">Sugar Mill Project</option>
              <option value="2">Design</option>
              <option value="3">Web</option>
          </select>
          @error('category')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>

          
            <div class="form-group">
              <label for="inputTitle" class="col-md-6 col-sm-6">Mulai Project<span class="text-danger">*</span></label>
              <input name="start_project" id="start_project" class="date-picker form-control fonts" type="date">
            @error('start_project')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
              <label for="inputTitle" class="col-md-6 col-sm-6">Selesai Project<span class="text-danger">*</span></label>
              <input name="end_project" id="end_project" class="date-picker form-control fonts" type="date">
            @error('end_project')
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
@endpush
