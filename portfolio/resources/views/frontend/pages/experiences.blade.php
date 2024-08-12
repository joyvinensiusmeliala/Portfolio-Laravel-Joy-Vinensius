<!-- ======= Team Section ======= -->
<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Experience</h2>
    </div>

  </div>
</div>
<section id="team" class="team ">
  <div class="container">

    <div class="row">
      @php
                $pekerjaan=DB::table('pekerjaans')->orderBy('start_bekerja','DESC')->get();

                
                // dd($categories);
            @endphp
            @if($pekerjaan)
            @foreach($pekerjaan as $key=>$kerja)

      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="{{$kerja->photo}}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>{{$kerja->nama_pekerjaan}}</h4>
            <span>{{$kerja->nama_perusahaan}} - {{$kerja->lokasi}}
            <div class="text-muted text-small">
              <small>
                {{ date('d F Y', strtotime($kerja->start_bekerja))}} - 
                <!-- {{ date('d F Y', strtotime($kerja->end_bekerja))}} -->
                @if($kerja->status=='active')
                  Sedang Bekerja
              @else
                {{ date('d F Y', strtotime($kerja->end_bekerja))}}
              @endif
              </small>
            </div>
            </span>
            
            <p><b>Job Description : </b></p>
            <p>
              {!! preg_replace("/^(.*)<br.*\/?>/m", '<p>$1</p>' , ($kerja->job_desc)) !!}
              
            </p>
            <div class="social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""> <i class="fab fa-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
            @endif

    </div>

  </div>
</section><!-- End Team Section -->
<br>