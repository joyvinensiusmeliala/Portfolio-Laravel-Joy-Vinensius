<!-- ======= Values Section ======= -->
<div class="section px-3 px-lg-4 pt-5" id="services">
    <div class="container-narrow">
        <div class="text-center mb-5">
            <h2 class="marker marker-center">My Services</h2>
          </div>
          <div class="text-center">
            {{--  <p>Odit est perspiciatis laborum et dicta</p>  --}}
            {{--  <p class="mx-auto mb-3" style="max-width:600px"> Odit est perspiciatis laborum et dicta.</p>  --}}
            <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
          </div>
  
    </div>
  </div>
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        

        {{--  <header class="section-header">
          <h2>Our Values</h2>
          <p>Odit est perspiciatis laborum et dicta</p>
        </header>  --}}

        <div class="row">
            @php
            $service=DB::table('services')->get();
            
        @endphp
        @if($service)
        @foreach($service as $key=>$serv)
         

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{$serv->photo}}" class="img-fluid" alt="">
              <h3>{{$serv->nama_skill}}</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          @endforeach
          @endif
        </div>

      </div>

    </section>
    <!-- End Values Section -->