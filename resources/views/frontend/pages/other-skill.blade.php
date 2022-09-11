<!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">      
        

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Networking Skill</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Cloud Computing Skill</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Communication Skill</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                  
                

                <div class="pricing">
                    <div class="container" data-aos="fade-up">
                  <div class="row gy-2" data-aos="fade-left">
                  @php
              $skill_programming=DB::table('skill_programmings')->where('category','1')->get();
          @endphp
          @if($skill_programming)
          @foreach($skill_programming as $key=>$skill_progrm)
                <div class="col-lg-5 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                  
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
                    </div> 
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
              
                <div class="row gy-2">
                  @php
                        $skill_programming=DB::table('skill_programmings')->where('category','3')->get();
                    @endphp
                    @if($skill_programming)
                    @foreach($skill_programming as $key=>$skill_progrm)
                    
                <div class="col-md-6" data-aos="zoom-out">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h4>{{$skill_progrm->nama_skill}}</h4>
                  </div>
              </div>
              @endforeach
              @endif
                  </div>
                  
                
              </div>
              
              {{--  End Tab 2 Content   --}}

            
              <div class="tab-pane fade show" id="tab3">
                
                <div class="row gy-2">
                    @php
                          $skill_programming=DB::table('skill_programmings')->where('category','3')->get();
                      @endphp
                      @if($skill_programming)
                      @foreach($skill_programming as $key=>$skill_progrm)
                      
                  <div class="col-md-6" data-aos="zoom-out">
                    <div class="feature-box d-flex align-items-center">
                      <i class="bi bi-check"></i>
                      <h4>{{$skill_progrm->nama_skill}}</h4>
                    </div>
                </div>
                @endforeach
                @endif
                    </div>
              
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="{{asset('frontend/img/features-2.png')}}" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
          <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-left" data-aos-delay="100">
              <img src="{{asset('frontend/img/features-3.png')}}" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-line-chart-line"></i>
                  <div>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-stack-line"></i>
                  <div>
                    <h4>Ullamco laboris nisi</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-brush-4-line"></i>
                  <div>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-magic-line"></i>
                  <div>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-command-line"></i>
                  <div>
                    <h4>Molestiae dolor</h4>
                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="ri-radar-line"></i>
                  <div>
                    <h4>Explicabo consectetur</h4>
                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->