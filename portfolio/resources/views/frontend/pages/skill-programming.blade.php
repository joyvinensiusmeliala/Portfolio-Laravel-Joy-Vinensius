<!-- ======= Pricing Section ======= -->

<div class="section px-3 px-lg-4 pt-5" id="skills">
  <div class="container-narrow">
      <div class="text-center mb-5">
          <h2 class="marker marker-center">Skills Programming</h2>
        </div>
        <div class="text-center">
          {{--  <p>Odit est perspiciatis laborum et dicta</p>  --}}
          {{--  <p class="mx-auto mb-3" style="max-width:600px"> Odit est perspiciatis laborum et dicta.</p>  --}}
          <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
        </div>

  </div>
</div>

    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4" data-aos="fade-left">
            @php
        $skill_programming=DB::table('skill_programmings')->where('category','1')->get();
    @endphp
    @if($skill_programming)
    @foreach($skill_programming as $key=>$skill_progrm)
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            
            <div class="box">
              <h3 style="color: #ff901c;">{{$skill_progrm->nama_skill}}</h3>
              {{--  <div class="price"><sup>$</sup>29<span> / mo</span></div>  --}}
              <img src="{{$skill_progrm->photo}}" class="img-fluid" alt="">
              {{--  <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>  --}}
              <a href="#" class="btn-buy">Download  </a>
            </div>
        </div>
        @endforeach
  @endif

        </div>

      </div>

    </section><!-- End Pricing Section -->

    