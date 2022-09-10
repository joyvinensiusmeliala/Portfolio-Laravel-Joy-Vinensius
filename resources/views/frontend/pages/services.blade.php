{{--  start script service   --}}

<div class="section px-3 px-lg-4 pt-5" id="services">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">My Services</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
    </div>
    
    <div class="row py-3">
    @php
          $service=DB::table('services')->get();
          
      @endphp
      @if($service)
      @foreach($service as $key=>$serv)
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="{{$serv->photo}}" width="96" height="96" alt="web design"/>
        <div class="h5">{{$serv->nama_skill}}</div>
      </div>
      @endforeach
      @endif
    </div>

    
  </div>
</div>

{{--  End Of Content Service   --}}