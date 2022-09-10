<div class="section px-3 px-lg-4 pt-5" id="skills">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">My Skills</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px">I am a quick learner and specialize in multitude of skills required for Web Application Development and Product Design</p>
    </div>
    <div class="bg-light p-3">
      <div class="row">
      @php
          $skill_programming=DB::table('skill_programmings')->get();
          
      @endphp
      @if($skill_programming)
      @foreach($skill_programming as $key=>$skill_progrm)
        <div class="col-md-6">
        
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">{{$skill_progrm->nama_skill}}</span><span>{{$skill_progrm->level}}%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          
        </div>
        @endforeach
      @endif
      </div>
    </div>
  </div>
</div>