<footer class="pt-4 pb-4 text-center bg-light">
    <div class="container">
      <div class="my-3">
        @php
            $settings=DB::table('settings')->get();
        @endphp
        <div class="h4">@foreach($settings as $data) {{$data->nama}}@endforeach</div>
        @php
        $pekerjaan=DB::table('pekerjaans')->where('status','active')->orderBy('start_bekerja','DESC')->limit('1')->get();
        // dd($categories);
        @endphp
        <p>@foreach($pekerjaan as $data) {{$data->nama_pekerjaan}}@endforeach</b> - @foreach($pekerjaan as $data) {{$data->nama_perusahaan}}@endforeach</p>
        <div class="social-nav">
          <nav role="navigation">
            <ul class="nav justify-content-center">
            @php
                  $sosmed=DB::table('sosmeds')->get();
                @endphp

                @if($sosmed)
                @foreach($sosmed as $key=>$sos)
                <li class="nav-item"><a class="nav-link" href="{{$sos->url}}" target="_blank" title="{{$sos->nama_sosmed}}"><i class="fab fa-{{$sos->class_sosmed}}"></i><span class="menu-title sr-only">{{$sos->nama_sosmed}}</span></a></li>    
            @endforeach
            @endif
            </ul>
          </nav>
        </div>
      </div>
      <div class="text-small text-secondary">
        <div class="mb-1">&copy; @foreach($settings as $data) {{$data->nama}}@endforeach. All rights reserved.</div>
        <div>
          {{--  <!-- Make sure to buy a license for the template before removing the line below. Buy license on https://templateflip.com/ -->Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>  --}}
      </div>
    </div>
  </footer>
