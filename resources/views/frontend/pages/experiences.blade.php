<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Experience</h2>
    </div>
    <div class="row">
      @php
          $pekerjaan=DB::table('pekerjaans')->orderBy('start_bekerja','DESC')->get();

          
          // dd($categories);
      @endphp
      @if($pekerjaan)
      @foreach($pekerjaan as $key=>$kerja)
      <div class="col-md-12">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
          <div class="card-header px-4 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">{{$kerja->nama_pekerjaan}}</h3>
                <div class="text-muted text-small"><b>{{$kerja->nama_perusahaan}}</b> - {{$kerja->lokasi}}</div>
                <div class="text-muted text-small">
                  <small>
                    {{ date('d F Y', strtotime($kerja->start_bekerja))}} - 
                    <!-- {{ date('d F Y', strtotime($kerja->end_bekerja))}} -->
                    @if($kerja->status=='active')
                      Sedang Bekerja
                  @else
                    {{ date('d F Y', strtotime($kerja->end_bekerja))}}
                  @endif
                  </small></div>
              </div>
              {{--  <img src="images/services/ui-ux.svg" width="48" height="48" alt="ui-ux"/>  --}}
              <img src="{{$kerja->photo}}" alt="logo" width="50px" height="50px" />
            </div>
          </div>
          <div class="card-body px-4 py-3">
            <p>
              <b>Deskripsi Pekerjaan : </b>
              <small>
              {!! preg_replace("/^(.*)<br.*\/?>/m", '<p>$1</p>' , ($kerja->job_desc)) !!}
              </small>
            </p>
          </div>
        </div>
      </div>
      @endforeach
      @endif

      

    </div>
  </div>
</div>