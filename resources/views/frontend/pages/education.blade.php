{{--  start script education   --}}

    {{--  <!-- <div class="section px-3 px-lg-8 pt-5" id="education"> -->  --}}
      <div class="section px-2 px-lg-4 pt-5" id="education"></div>
      {{--  <!-- <div class="section px-3 px-lg-8 px-lg-5" id="education"> -->  --}}
      <div class="container-narrow">
        <div class="text-center mb-5">
       
          <h2 class="marker marker-center">My Education</h2>
        </div>
        
        <!-- <div class="text-center">
          <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
        </div> -->
        <div class="container-narrow">
          
          <div class="row">
          @php
              $pendidikan=DB::table('pendidikans')->get();
              
          @endphp
          @if($pendidikan)
          @foreach($pendidikan as $key=>$pendidikans)
            <div class="col-md-4 offset-md-1" data-aos="fade-right" data-aos-delay="100"><img class="avatar img-fluid mt-1" src="{{asset('frontend/images/education/itdel.jpg')}}" width="200" height="200" alt="Walter Patterson"/></div>
            <div class="col-md-5">
              <h2 class="h4 my-1">@foreach($pendidikan as $pendidikans) {{$pendidikans->tempat_pendidikan}} @endforeach</h2>
              <!-- <p>I am graduated from Del Institute Of Technology. I am a skilled front-end developer and master of graphic design tools such as Photoshop and Sketch. I am a quick learner and a team worker that gets the job done. I can easily capitalize on low hanging fruits and quickly maximize timely deliverables for real-time schemas.</p> -->
              <div class="row mt-3">
                <div class="col-sm-4">
                  <div class="pb-1">Degree </div>
                </div>
                <div class="col-sm-1">
                  <div class="pb-1">: </div>
                </div>
                <div class="col-sm-4">
                  <div class="pb-1 fw-bolder">@foreach($pendidikan as $pendidikans) {{$pendidikans->jenjang_pendidikan}} @endforeach</div>
                </div>
                <div class="col-sm-4">
                  <div class="pb-1">Field Of Study</div>
                </div>
                <div class="col-sm-1">
                  <div class="pb-1">: </div>
                </div>
                <div class="col-sm-6  ">
                  <div class="pb-1 fw-bolder">@foreach($pendidikan as $pendidikans) {{$pendidikans->jurusan}} @endforeach</div>
                </div>
                <div class="col-sm-4">
                  <div class="pb-1">Start Date</div>
                </div>
                <div class="col-sm-1">
                  <div class="pb-1">: </div>
                </div>
                <div class="col-sm-5">
                  <div class="pb-1 fw-bolder">{{ date('d F Y', strtotime($pendidikans->start_pendidikan))}} </div>
                </div>
                <div class="col-sm-4">
                  <div class="pb-1">End Date</div>
                </div>
                <div class="col-sm-1">
                  <div class="pb-1">: </div>
                </div>
                <div class="col-sm-5">
                  <div class="pb-1 fw-bolder">{{ date('d F Y', strtotime($pendidikans->end_pendidikan))}}</div>
                </div>
              </div>
            </div>
            @endforeach
          @endif
          </div>
        </div>
      </div>
    </div>

  {{--  end script education   --}}