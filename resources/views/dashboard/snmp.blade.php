@include('header')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6 mt-3 mb-3">Monitoring IRD LIVE</h4>
    </div>
</div>

<div class="container-fluid pt-5 pb-2 bg-light">
    <div class="container text-center">
      <h2 class="display-6" id="channel">IRD Live {{$snmp->id}}</h2>
      <div class="row pt-4 gx-4 gy-4">

            {{-- Input Status --}}
            <div class="col-md-3">
              <div class="card crop-img">
                <div class="card-body">
                    <h5 class="card-tittle text-center">INPUT STATUS</h5>    
                </div> 
                {{-- end card body --}}

                      <div class="card-footer bg-white">
                        <div class="d-flex align-items-center px-2">
                          <i class="fas fa-satellite-dish fa-2x py-auto" aria-hidden="true"></i>
                            <div class="card-body text-end">
                              <small class="text-start fw-bold">Satelit Input</small><br>
                                <?php
                                  $satelit = $snmp->status_sat;

                                  if ($satelit == "LOCKED") 
                                  {
                                    echo 
                                    "<font color='green'><small class='text-start fw-bold'>$satelit</small></font>";
                                  }
                                  else if ($satelit == "UNLOCKED")
                                  {
                                    echo 
                                    "<font color='red'><small class='text-start fw-bold'>$satelit</small></font>";;
                                  }
                                ?>
                                {{-- {{$snmp->status_sat}} --}}
                              </div>
                          </div>
                      </div> 

                      <div class="card-footer bg-white">
                        <small class="text-start fw-bold">Margin {{$snmp->margin}} dB</small><br>
                        <div class="progress">
                          <div class="progress-bar" style="width:{{$snmp->margin*10}}%"></div>
                        </div>
                      </div>
                
                      <div class="card-footer bg-white">
                          <div class="d-flex align-items-center px-2">
                              <i class="fas fa-ethernet fa-2x py-auto color-green" aria-hidden="true"></i>
                              <div class="card-body text-end">
                                <small class="text-start fw-bold">IP Input</small><br>
                                  <?php
                                  $ip = $snmp->status_ip;
                                  if ($ip == "LOCKED") 
                                  {
                                    echo 
                                    "<font color='green'><small class='text-start fw-bold'>LOCKED</small></font>";
                                  }
                                  else if ($ip == "UNLOCKED")
                                  {
                                    echo 
                                    "<font color='red'><small class='text-start fw-bold'>UNLOCKED</small></font>";;
                                  }
                                ?>
                                  {{-- <small class="text-start fw-bold">{{$snmp->status_ip}}</small> --}}
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
                        <i class="fas fa-video fa-2x py-auto" aria-hidden="true"></i>
                        <div class="card-body text-end">
                            <small class="text-start fw-bold">Video Status</small><br>
                            <small class="text-start fw-bold">{{$snmp->status_video}}</small>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-white">
                  <div class="d-flex align-items-center px-2">
                      <i class="fas fa-video fa-2x py-auto" aria-hidden="true"></i>
                      <div class="card-body text-end">
                          <small class="text-start fw-bold">TS Bitrate</small><br>
                          <small class="text-start fw-bold">#</small>
                      </div>
                  </div>
                </div>
                
                <div class="card-footer bg-white">
                    <div class="d-flex align-items-center px-2">
                        <i class="fas fa-video fa-2x py-auto" aria-hidden="true"></i>
                        <div class="card-body text-end">
                            <small class="text-start fw-bold">Video Bitrate</small><br>
                            <small class="text-start fw-bold">{{$snmp->video_bitrate}}</small>
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
                        <i class="fas fa-tv fa-2x py-auto" aria-hidden="true"></i>
                        <div class="card-body text-end">
                            <small class="text-start fw-bold">Service Terpilih</small><br>
                            <small class="text-start fw-bold">#</small>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-white">
                  <div class="d-flex align-items-center px-2">
                      <i class="fas fa-volume-up fa-2x py-auto" aria-hidden="true"></i>
                      <div class="card-body text-end">
                          <small class="text-start fw-bold">AUDIO 1 Terpilih</small><br>
                          <small class="text-start fw-bold">#</small>
                      </div>
                  </div>
                </div>
                
                <div class="card-footer bg-white">
                    <div class="d-flex align-items-center px-2">
                        <i class="fas fa-volume-up fa-2x py-auto" aria-hidden="true"></i>
                        <div class="card-body text-end">
                            <small class="text-start fw-bold">AUDIO 2 Terpilih</small><br>
                            <small class="text-start fw-bold">#</small>
                        </div>
                    </div>
                </div>
              </div>
            </div>

      </div>  
    </div>
  </div>


@include('footer')