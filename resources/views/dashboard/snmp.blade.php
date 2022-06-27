@include('header')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6 mt-3 mb-3">Monitoring IRD LIVE</h4>
    </div>
</div>
<div class="container my-3">
<a href="/" class="btn btn-success"><i class="bi bi-arrow-left"></i></a>
</div>
<div class="container-fluid bg-light">
    <div class="container text-center">
      <h2 class="display-6" id="channel">IRD Live {{$snmp->id}}</h2>
      <div class="row pt-4 gx-4 gy-4">
        <hr>
            {{-- Input Status --}}
            <div class="col-md-4">
              <div class="card crop-img">
                <div class="card-body">
                    <h5 class="card-tittle text-center">Input Status</h5>    
                </div> 
                {{-- end card body --}}

                      <div class="card-footer bg-white">
                        <div class="d-flex align-items-center px-2">
                          <i class="bi bi-broadcast" style="font-size: 2rem;"></i>
                            <div class="card-body text-end">
                              <small class="text-start fw-bold">Satelit Input</small><br>
                              <small class='text-start fw-bold'><span id="status_sat">{{$snmp->status_sat}}</span></small>
                              </div>
                          </div>
                      </div> 

                      <div class="card-footer bg-white">
                        <small class="text-start fw-bold">Margin <span id="margin">{{$snmp->margin}}</span> dB</small><br>
                        <div class="progress">
                          <div class="progress-bar" id="margin-bar" ></div>
                        </div>
                      </div>
                      <div class="card-footer bg-white">
                          <div class="d-flex align-items-center px-2">
                              <i class="bi bi-usb-plug-fill" style="font-size: 2rem;"></i>
                              <div class="card-body text-end">
                                <small class="text-start fw-bold">IP Input</small><br>
                                <small class='text-start fw-bold'><span id="status_ip">{{$snmp->status_ip}}</span></small>
                              </div>
                          </div>
                      </div>
              </div>
            </div>

            {{-- Video Status --}}
            <div class="col-md-4 ">
              <div class="card crop-img">
                <div class="card-body">
                    <h5 class="card-tittle text-center">Video Status</h5>
                </div>

                <div class="card-footer bg-white">
                    <div class="d-flex align-items-center px-2">
                        <i class="bi bi-film" style="font-size: 2rem;"></i>
                        <div class="card-body text-end">
                            <small class="text-start fw-bold">Video Status</small><br>
                            <small class="text-start fw-bold"><span id="status_video">{{$snmp->status_video}}</span></small>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-white">
                  <div class="d-flex align-items-center px-2">
                      <i class="bi bi-sd-card-fill" style="font-size: 2rem; "></i>
                      <div class="card-body text-end">
                          <small class="text-start fw-bold">TS Bitrate</small><br>
                          <small class="text-start fw-bold"><span id="ts_bitrate">{{number_format($snmp->ts_bitrate)}}</span> Mbps</small>
                      </div>
                  </div>
                </div>
                
                <div class="card-footer bg-white">
                    <div class="d-flex align-items-center px-2">
                        <i class="bi bi-reception-4" style="font-size: 2rem;"></i>
                        <div class="card-body text-end">
                            <small class="text-start fw-bold">Video Bitrate</small><br>
                            <small class="text-start fw-bold"><span id="bitrate">{{number_format($snmp->video_bitrate)}}</span> Mbits/s</small>
                        </div>
                    </div>
                </div>
              </div>
            </div>

            {{-- Service Status & PID Service--}}
            <div class="col-md-4 ">
              <div class="card crop-img">
                <div class="card-body">
                    <h5 class="card-tittle text-center">Service & Audio Status</h5>
                </div>

                <div class="card-footer bg-white">
                    <div class="d-flex align-items-center px-2">
                        <i class="bi bi-camera-reels-fill" style="font-size: 2rem;"></i>
                        <div class="card-body text-end">
                            <small class="text-start fw-bold">PID Service yang terpilih</small><br>
                            <small class="text-start fw-bold"><span id="service">{{$snmp->service}}</span></small>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-white">
                  <div class="d-flex align-items-center px-2">
                      <i class="bi bi-soundwave" style="font-size: 2rem;"></i>
                      <div class="card-body text-end">
                          <small class="text-start fw-bold">PID Audio 1 terpilih</small><br>
                          <small class="text-start fw-bold"><span id="pid_audio1">{{$snmp->PID_audio}}</span></small>
                      </div>
                  </div>
                </div>
                
                <div class="card-footer bg-white">
                    <div class="d-flex align-items-center px-2">
                        <i class="bi bi-soundwave" style="font-size: 2rem;"></i>
                        <div class="card-body text-end">
                            <small class="text-start fw-bold">PID Audio 2 terpilih</small><br>
                            <small class="text-start fw-bold"><span id="pid_audio2">{{$snmp->PID_audio2}}</span></small>
                        </div>
                    </div>
                </div>
              </div>
            </div>

      </div>  
    </div>
  </div>

<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
            setInterval(function() {
                $('#margin').load(location.href + ' #margin' );
                $margin = $("#margin").text()*10;
                $('#margin-bar').css({"width":$margin+'%'});
                $margin < 30 ? $('#margin-bar').css({"background-color": "red"}) : $('#margin-bar').css({"background-color": "blue"}) 
                $('#bitrate').load(location.href + ' #bitrate' );
                $('#ts_bitrate').load(location.href + ' #ts_bitrate' );
                $('#status_sat').load(location.href + ' #status_sat' );
                $('#status_ip').load(location.href + ' #status_ip' );
                $('#status_video').load(location.href + ' #status_video' );
                $('#service').load(location.href + ' #service' );
                $('#pid_audio1').load(location.href + ' #pid_audio1' );
                $('#pid_audio2').load(location.href + ' #pid_audio2' );
                $('#status_video').text() == "Video Running" ?  $('#status_video').css({"color":"green"}) : $('#status_video').css({"color":"red"}); 
                $("#status_sat").text() == "LOCKED" ?  $("#status_sat").css({"color":"green"}) : $("#status_sat").css({"color":"red"}); 
                $("#status_ip").text() == "LOCKED" ?  $("#status_ip").css({"color":"green"}) : $("#status_ip").css({"color":"red"}); 
              // $("#test").load("snmp/ird.php").text();
            }, 1000);
        });
</script>

@include('footer')