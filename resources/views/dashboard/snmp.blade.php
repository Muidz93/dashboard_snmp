@include('header')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6 mt-3 mb-3">Monitoring IRD LIVE</h4>
    </div>
</div>

<div class="container-fluid pt-5 pb-2 bg-light">
    <div class="container text-center">
      <h2 class="display-6" id="channel">IRD Live #ID 1-6</h2>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-3">
          <div class="card crop-img">
            <div class="card-body">
                <h5 class="card-tittle text-center">INPUT STATUS</h5>    
            </div>
            <div class="card-footer bg-white">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-satellite-dish fa-2x py-auto" aria-hidden="true"></i>
                    <div class="card-body text-end">
                        <small class="text-start fw-bold">Satelit Input</small><br>
                        <small class="text-start fw-bold">Locked/Unlocked</small>
                    </div>
                </div>
            </div> 
            
            <div class="card-footer bg-white">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-ethernet fa-2x py-auto" aria-hidden="true"></i>
                    <div class="card-body text-end">
                        <small class="text-start fw-bold">IP Input</small><br>
                        <small class="text-start fw-bold">Locked/Unlocked</small>
                    </div>
                </div>
            </div>

          </div>
        </div>

        <div class="col-md-4 ">
          <div class="card crop-img">
            <div class="card-body">
                <h5 class="card-tittle text-center">Margin & Video Status</h5>
            </div>
            <div class="card-footer bg-white">
              <small class="text-start fw-bold">Margin 9 dB</small><br>
              <div class="progress">
                <div class="progress-bar" style="width:70%"></div>
              </div>
            </div>

            <div class="card-footer bg-white">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-video fa-2x py-auto" aria-hidden="true"></i>
                    <div class="card-body text-end">
                        <small class="text-start fw-bold">Video Status</small><br>
                        <small class="text-start fw-bold">Video Running/Stop/Error</small>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-white">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-video fa-2x py-auto" aria-hidden="true"></i>
                    <div class="card-body text-end">
                        <small class="text-start fw-bold">Video Bitrate</small><br>
                        <small class="text-start fw-bold">10000</small>
                    </div>
                </div>
            </div>

          </div>
        </div>

        <div class="col-md-4 ">
          <div class="card crop-img">
            <div class="card-body">
                <h5 class="card-tittle text-center">Total Encoder</h5>
                <p class="card-text text-center">Unit</p>
            </div>
              <div class="card-footer bg-white">
                <small class="text-start fw-bold">SD</small>
              </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

@include('footer')