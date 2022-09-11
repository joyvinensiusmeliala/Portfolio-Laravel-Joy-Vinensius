<div class="section px-3 px-lg-4 pt-5" id="project">
    <div class="container-narrow">
      <div class="text-center mb-5">
        <h2 class="marker marker-center">Project Undertakens</h2>
      </div>
      <div class="row">
        @php
            $project=DB::table('projects')->get();
            // dd($categories);
        @endphp
        @if($project)
        @foreach($project as $key=>$projects)
        <div class="col-md-6">
          <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
            <div class="card-header px-4 py-2">
              <div class="d-flex justify-content-between">
                <div>
                  <h3 class="h5 mb-1">{{$projects->nama_project}}</h3>
                  <div class="text-muted text-small"><b>{{$projects->penyelenggara}}</b> - {{$projects->lokasi}}</div>
                  <div class="text-muted text-small"> <small><b>{{ date('d F Y', strtotime($projects->start_project))}} - {{ date('d F Y', strtotime($projects->end_project))}}</b></small></div>
                  <div class="text-muted text-small"> <small><b>As : {{$projects->sebagai}}</b></small></div>
                  {{--  $today = Carbon::now()->isoFormat('D MMMM Y');  --}}
                </div>
                {{--  <img src="images/services/ui-ux.svg" width="48" height="48" alt="ui-ux"/>  --}}
                {{--  <img src="{{$projects->photo}}" alt="logo" width="50px" height="50px" />  --}}
              </div>
            </div>

            <div class="card-body px-4 py-3">
              <p>
                 <b>Deskripsi Project : </b>
                <small>
                  {{--  {{$projects->deskripsi}}  --}}

                {!! preg_replace("/^(.*)<br.*\/?>/m", '<p>$1</p>' , ($projects->deskripsi)) !!}
                {{--  preg_replace("/^(.*)<br.*\/?>/m", '<p>$1</p>', $string);  --}}

              </small>
              </p>
              {{--  <p>Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>  --}}
            </div>
          </div>
        </div>
        @endforeach
        @endif



      </div>
    </div>
  </div>