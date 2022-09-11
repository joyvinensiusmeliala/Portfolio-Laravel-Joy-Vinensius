<!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <div class="text-center mb-5">
            <h2 class="marker marker-center">My Feature</h2>
          </div>
          <div class="text-center">
            {{--  <p>Odit est perspiciatis laborum et dicta</p>  --}}
            {{--  <p class="mx-auto mb-3" style="max-width:600px"> Odit est perspiciatis laborum et dicta.</p>  --}}
          </div>

        <div class="row">

          <div class="col-lg-6">
              
            <img src="{{asset('frontend/img/features.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
              <div class="row align-self-center gy-4">
                  @php
                      $skill_programming=DB::table('skill_programmings')->where('category','3')->get();
                  @endphp
                  @if($skill_programming)
                  @foreach($skill_programming as $key=>$skill_progrm)
                  
              <div class="col-md-6" data-aos="zoom-out">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>{{$skill_progrm->nama_skill}}</h3>
                </div>
            </div>

              
              {{--  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Repellendus mollitia</h3>
                </div>
              </div>  --}}
              @endforeach
              @endif
            </div>
            
        </div>
        </div> <!-- / row -->

        

      </div>

    </section><!-- End Features Section -->