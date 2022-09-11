<div class="section px-3 px-lg-4 pt-5" id="skills">
    <div class="container-narrow">
      <div class="text-center mb-5">
        <h2 class="marker marker-center">Certificate</h2>
      </div>
      <div class="text-center">
        <p class="mx-auto mb-3" style="max-width:600px">I am a quick learner and specialize in multitude of skills required for Web Application Development and Product Design</p>
      </div>
      
      

      <!-- Trigger the Modal -->
      
      <div class="row">
        @php
        $portfolio=DB::table('portfolios')->get();
        
    @endphp
    @if($portfolio)
    @foreach($portfolio as $key=>$portofolio)
        <div class="col-4">
          <img id="myImg" src="{{$portofolio->photo }}" alt="Snow" style="width:100%;max-width:300px">

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close-project">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
      
      

      {{--  End Content   --}}
    </div>
  </div>