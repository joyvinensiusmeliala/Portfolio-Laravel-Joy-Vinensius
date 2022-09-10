<div class="section px-2 px-lg-4 pt-5" id="portfolio">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Portfolio </h2>
    </div>
    
    

    <!-- <div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
    @php
          $portfolio=DB::table('portfolios')->get();
          
      @endphp
      @if($portfolio)
      @foreach($portfolio as $key=>$portf)
      <div class="grid-sizer"></div>
      <div class="grid-item"><a href="https://dribbble.com">
          <figure class="portfolio-item"><img src="{{$portf->photo}}" data-bp="images/portfolio/1.jpg"/>
            <figcaption>
              <h4 class="h5 mb-0">{{$portf->nama_project}}</h4>
              <div>{{$portf->penyelenggara}}</div>
            </figcaption>
          </figure></a></div>
          @endforeach
      @endif
    </div> -->
    
  </div>
</div>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section px-3 px-lg-4 pt-5  ">
<div class="container-narrow">

   {{--  <div class="section-title">
    <h2>Portfolio</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  </div>  --}}

  <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Sugar Mill Project</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
      </ul>
    </div>
  </div>
  <div class="row portfolio-container">
    @php
            $portfolio=DB::table('portfolios')->where('category','1')->get();
            
            
        @endphp
        @if($portfolio)
        @foreach($portfolio as $key=>$portf)
       
       <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      
        <img id="myImgPortofolio" src="{{$portf->photo }}" alt="Snow" style="width:100%;max-width:300px">

        <!-- The Modal -->
        <div id="myModalPortofolio" class="modal-portofolio">

          <!-- The Close Button -->
          <span class="close">&times;</span>

          <!-- Modal Content (The Image) -->
          <img class="modal-content" id="img02">

          <!-- Modal Caption (Image Text) -->
          <div id="captionPortofolio"></div>
        </div> 
        
      </div>  
      {{--  Content  --}}
    
      @endforeach
        @endif

        @php
            $portfolio1=DB::table('portfolios')->where('category','2')->get();
            
            
        @endphp
        @if($portfolio1)
        @foreach($portfolio1 as $key=>$portf1)
      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      
        <img id="myImgPortofolio" src="{{$portf1->photo }}" alt="Snow" style="width:100%;max-width:300px">

        <!-- The Modal -->
        <div id="myModalPortofolio" class="modal-portofolio">

          <!-- The Close Button -->
          <span class="close">&times;</span>

          <!-- Modal Content (The Image) -->
          <img class="modal-content" id="img02">

          <!-- Modal Caption (Image Text) -->
          <div id="captionPortofolio"></div>
        </div> 
        
      </div>
      @endforeach
        @endif
      
        @php
            $portfolio2=DB::table('portfolios')->where('category','3')->get();
        @endphp
        @if($portfolio2)
        @foreach($portfolio2 as $key=>$portf2)
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      
          <img id="myImgPortofolio" src="{{$portf2->photo }}" alt="Snow" style="width:100%;max-width:300px">

          <!-- The Modal -->
          <div id="myModalPortofolio" class="modal-portofolio">
  
            <!-- The Close Button -->
            <span class="close">&times;</span>
  
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img02">
  
            <!-- Modal Caption (Image Text) -->
            <div id="captionPortofolio"></div>
          </div> 
          
        </div>
      @endforeach
        @endif
      
        
      
    </div>

    {{--  <!-- Trigger the Modal -->
  <img id="myImgPortofolio" src="{{$portf->photo }}" alt="Snow" style="width:100%;max-width:300px">

  <!-- The Modal -->
  <div id="myModal" class="modal-portofolio">

    <!-- The Close Button -->
    <span class="close-project">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
  </div>  --}}

</div>
</section>
<!-- End Portfolio Section -->