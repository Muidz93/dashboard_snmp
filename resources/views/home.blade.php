@include('header')
<!-- banner -->
<div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-6 mt-3 mb-3">Selamat Datang</h4>
  </div>
</div>


<!-- dashboard -->
<div class="container-fluid pt-5 pb-2 bg-light">
  <div class="container text-center">
    <h2 class="display-6" id="channel">Dashboard UseeTV</h2>
    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4 ">
        <div class="card crop-img">
            <div class="card-body">
              <h5 class="card-tittle text-center">Total Channel UseeTV</h5>
              <p class="card-text text-center">{{ $chn }} Channel</p>
            </div>
          <div class="card-footer bg-white">
            <small class="text-start fw-bold">{{ $hd }} HD, {{ $sd }} SD</small>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card crop-img">
          <div class="card-body">
              <h5 class="card-tittle text-center">Total IRD</h5>
              <p class="card-text text-center">{{ $hitung }} Unit</p>
          </div>
          <div class="card-footer bg-white">
            <small class="text-start fw-bold">{{ $hd }} HD, {{ $sd }} SD</small>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card crop-img">
          <div class="card-body">
              <h5 class="card-tittle text-center">Total Encoder</h5>
              <p class="card-text text-center">{{ $hitung }} Unit</p>
          </div>
            <div class="card-footer bg-white">
              <small class="text-start fw-bold">{{ $hd }} HD, {{ $sd }} SD</small>
            </div>
        </div>
      </div>
    </div>  
  </div>
</div>

<!-- Monit IRD -->
<div class="pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-6" id="#">Monitoring Status IRD Live</h2>
    <p id="test"></p>
    <div class="row pt-4">
      {{-- <div class=" kartu ">
        <div class="">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">IRD Live 1</h5>
            <table class="table table-stripe">
              <thead>
                <tr>
                  <th>Status : <span id="cekstatusSat1"></span> </th>
                </tr>
                <tr>
                  <td align="left">Service ID : <span id="cekservice1"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Status : <span id="cekstatus1"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Bitrate : <span id="cekbitrate1"></span> bits/s</td>
                </tr>
                
                <tr>
                  <td align="left">Kualitas : <span id="cekkualitas1"></span></td>
                </tr>

                <tr>
                  <td align="left">Margin : <span id="cekmargin1"></span></td>
                </tr>
              </thead>
            </table>
            <div class=" mx-auto">
              <a href="http://192.168.112.2" target="__blank">
                <button type="button" class="btn btn-primary">Lihat IRD</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class=" kartu ">
        <div class="">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">IRD Live 2</h5>
            <table class="table table-stripe">
              <thead>
                <tr>
                  <th>Status : <span id="cekstatusSat2"></span> </th>
                </tr>

                <tr>
                  <td align="left">Service ID : <span id="cekservice2"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Status : <span id="cekstatus2"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Bitrate : <span id="cekbitrate2"></span> bits/s</td>
                </tr>
                
                <tr>
                  <td align="left">Kualitas : <span id="cekkualitas2"></span></td>
                </tr>

                <tr>
                  <td align="left">Margin : <span id="cekmargin2"></span></td>
                </tr>
              </thead>
            </table>
            <div class=" mx-auto">
              <a href="/dashboard" target="__blank">
                <button type="button" class="btn btn-primary">Lihat IRD</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class=" kartu ">
        <div class="">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">IRD Live 3</h5>
            <table class="table table-stripe">
              <thead>
                <tr>
                  <th>Status : <span id="cekstatusSat3"></span> </th>
                </tr>
                <tr>
                  <th>Ip input Status : <span id="cekstatusIp3"></span> </th>
                </tr>
                <tr>
                  <td align="left">Service ID : <span id="cekservice3"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Status : <span id="cekstatus3"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Bitrate : <span id="cekbitrate3"></span> bits/s</td>
                </tr>
                
                <tr>
                  <td align="left">Kualitas : <span id="cekkualitas3"></span></td>
                </tr>

                <tr>
                  <td align="left">Margin : <span id="cekmargin3"></span></td>
                </tr>
              </thead>
            </table>
            <div class=" mx-auto">
              <a href="http://192.168.112.4" target="__blank">
                <button type="button" class="btn btn-primary">Lihat IRD</button>
              </a>
            </div>
          </div>
        </div>
      </div> <br> --}}

      {{-- <div class=" kartu  ">
        <div class="">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Total Channel HD</h5>
            <p class="card-text">{{ $hd }} Channel</p>
          </div>
        </div>
      </div> --}}

      {{-- <div class=" kartu  ">
        <div class="">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Total Channel SD</h5>
            <p class="card-text">{{ $sd }} Channel</p>
          </div>
        </div>
      </div> --}}
    </div>

    <div class="row pt-4 gx-4 gy-4">
      {{-- <div class=" kartu ">
        <div class="">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">IRD Live 4</h5>
            <table class="table table-stripe">
              <thead>
                 <tr>
                  <th>Sat Status : <span id="cekstatusSat4"></span> </th>
                </tr>
                <tr>
                  <th>Ip input Status : <span id="cekstatusIp4"></span> </th>
                </tr>
                <tr>
                  <td align="left">Service ID : <span id="cekservice4"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Status : <span id="cekstatus4"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Bitrate : <span id="cekbitrate4"></span> bits/s</td>
                </tr>
                
                <tr>
                  <td align="left">Kualitas : <span id="cekkualitas4"></span></td>
                </tr>

                <tr>
                  <td align="left">Margin : <span id="cekmargin4"></span></td>
                </tr>
              </thead>
            </table>
            <div class=" mx-auto">
              <a href="http://192.168.112.5" target="__blank">
                <button type="button" class="btn btn-primary">Lihat IRD</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class=" kartu ">
        <div class="">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">IRD Live 5</h5>
            <table class="table table-stripe">
              <thead>
                 <tr>
                  <th>Status : <span id="cekstatusSat5"></span> </th>
                </tr>
                <tr>
                  <td align="left">Service ID : <span id="cekservice5"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Status : <span id="cekstatus5"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Bitrate : <span id="cekbitrate5"></span> bits/s</td>
                </tr>
                
                <tr>
                  <td align="left">Kualitas : <span id="cekkualitas5"></span></td>
                </tr>

                <tr>
                  <td align="left">Margin : <span id="cekmargin5"></span></td>
                </tr>
              </thead>
            </table>
            <div class=" mx-auto">
              <a href="http://192.168.112.6" target="__blank">
                <button type="button" class="btn btn-primary">Lihat IRD</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class=" kartu ">
        <div class="">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">IRD Live 6</h5>
            <table class="table table-stripe">
              <thead>
                 <tr>
                  <th>Status : <span id="cekstatusSat6"></span> </th>
                </tr>
                <tr>
                  <td align="left">Service ID : <span id="cekservice6"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Status : <span id="cekstatus6"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Bitrate : <span id="cekbitrate6"></span> bits/s</td>
                </tr>
                
                <tr>
                  <td align="left">Kualitas : <span id="cekkualitas6"></span></td>
                </tr>

                <tr>
                  <td align="left">Margin : <span id="cekmargin6"></span></td>
                </tr>
              </thead>
            </table>
            <div class=" mx-auto">
              <a href="http://192.168.112.7" target="__blank">
                <button type="button" class="btn btn-primary">Lihat IRD</button>
              </a>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    <div class="table-responsive">
      <table class="table table-hover">
  <thead class="bg-dark text-white">
    <tr>
      <th scope="col">IRD</th>
      <th scope="col">Satelit status</th>
      <th scope="col">margin</th>
      <th scope="col">Video Bitrate</th>
      <th>aksi</th>
    </tr>
  </thead>
  <tbody >
    <?php $no=1 ?>
    @foreach ($responseBody as $rsp)
    <tr>
      <th scope="row">IRD {{$no++}}</th>
      <td><span class="status_sat{{$no}}">{{$rsp->status_sat}}</span></td>
      <td><span class="margin{{$no}}">{{$rsp->margin}}</span> dB</td>
      <td><span class="bitrate{{$no}}">{{$rsp->video_bitrate}}</span></td>
      <td><button class="btn btn-info">detail</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
   
    <hr>
    {{-- <div class=" mx-auto text-center pt-3">
      <a href="/dashboard">
        <button type="button" class="btn btn-danger btn-lg">Lihat Detail</button>
      </a>
    </div> --}}
  </div>
</div>

<!-- Monit IRD -->
<div class="container-fluid pt-5 pb-2 bg-light">
  <div class="container text-center">
    <h2 class="display-6" id="#">Monitoring Status IRD Live</h2>
    <div class="row pt-4 gx-4 gy-4">
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>List IRD</th>
                    <th>Satelit</th>
                    <th>IP Input</th>
                    <th>Status Video</th>
                    <th>Margin</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>

            <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td align="center">IRD 1</td>
                        <td align="center"><span id="cekstatusSat2"></span></td>
                        <td align="center">Unlocked</td>
                        <td align="center"><span id="cekstatus2"></span></td>
                        <td align="center"><span id="cekmargin2"></span></td>
                        <td>
                            <span class="badge bg-warning text-dark">Lihat Detail</span>
                        </td> 
                    </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>


@include('footer')
