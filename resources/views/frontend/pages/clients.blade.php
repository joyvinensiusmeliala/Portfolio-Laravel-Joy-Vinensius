<!-- ======= Clients Section ======= -->
     <section id="clients" class="clients">
      
     <div class="container" data-aos="zoom-in">
        <div class="row">
        @php
                $pekerjaan=DB::table('pekerjaans')->orderBy('start_bekerja','DESC')->get();
                // dd($categories);
            @endphp
            @if($pekerjaan)
            @foreach($pekerjaan as $key=>$kerja)
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{$kerja->photo}}" class="img-fluid" alt="">
          </div>

          @endforeach
          @endif
        </div>
      </div> 
      
    </section>
    
    <!-- End Clients Section -->