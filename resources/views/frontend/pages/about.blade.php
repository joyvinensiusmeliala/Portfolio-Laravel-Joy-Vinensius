{{--  start script about us    --}}

<!-- Breadcrumbs -->

<div class="section pt-4 px-3 px-lg-4" id="about">
    <div class="container-narrow">
      <div class="row">
        <div class="col-md-6">
            @php
                $settings=DB::table('settings')->get();
            @endphp

            
            @if($settings)
        @foreach($settings as $key=>$data)
          <h2 class="h4 my-2">Hello! I’m @foreach($settings as $data) {{$data->nama}}@endforeach.</h2>
          <p>{!! preg_replace("/^(.*)<br.*\/?>/m", '<p>$1</p>' , ($data->description)) !!}</p>
          @endforeach
        @endif
          <div class="row mt-3">
            <div class="col-sm-2">
              <div class="pb-1">Age:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">24</div>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Email:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">@foreach($settings as $data) {{$data->email}} @endforeach</div>
            </div>
            {{--  <div class="col-sm-2">
              <div class="pb-1">Skype:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">jvinensius@gmail.com</div>
            </div>  --}}
            <div class="col-sm-2">
              <div class="pb-1">Phone:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">@foreach($settings as $data) {{$data->phone}} @endforeach</div>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Address:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">@foreach($settings as $data) {{$data->address }}@endforeach</div>
             
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Status:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">@foreach($settings as $data) {{$data->status}}@endforeach</div>
            </div>
          </div>
        </div>
        <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img class="avatar img-fluid mt-2" src="{{asset('frontend/images/joy.jpg')}}" width="400" height="400" alt="Walter Patterson"/></div>
      </div>
    </div>
  </div>

{{--  end script about us   --}}