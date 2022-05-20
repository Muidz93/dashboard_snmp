@include('header')
<!-- banner -->
<div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-6 mt-3 mb-3">Selamat Datang</h4>
  </div>
</div>

<!-- Monit IRD -->
<div class="pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-6" id="#">Monitoring Status IRD Live</h2>
    <p id="test"></p>
    <div class="row pt-4">
      <div class=" kartu ">
        <div class="">
          {{-- <i class="fas fa-tv fa-3x"></i> --}}
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
          {{-- <i class="fas fa-tv fa-3x"></i> --}}
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
          {{-- <i class="fas fa-tv fa-3x"></i> --}}
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
      </div> <br>

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
      <div class=" kartu ">
        <div class="">
          {{-- <i class="fas fa-tv fa-3x"></i> --}}
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
          {{-- <i class="fas fa-tv fa-3x"></i> --}}
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
          {{-- <i class="fas fa-tv fa-3x"></i> --}}
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
      </div>
    </div>
    @foreach ($responseBody as $rsp)
    <?php $no=1 ?>
    <div class=" kartu ">
        <div class="">
          {{-- <i class="fas fa-tv fa-3x"></i> --}}
          <div class="card-body">
            <h5 class="card-title">IRD Test</h5>
            <table class="table table-stripe">
              <thead>
                <tr>
                  <th>Status : <span id="cekstatusSat"></span> </th>
                </tr>
                <tr>
                  <td align="left">Service ID : <span id="cekservice"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Status : <span id="cekstatus"></span></td>
                </tr>
                <tr>
                  <td align="left">Video Bitrate : <span id="cekbitrate"></span> bits/s</td>
                </tr>
                <tr>
                  <td align="left">Kualitas : <span id="cekkualitas"></span></td>
                </tr>
                <tr>
                  <td align="left">Margin : <span id="cekmarginn">{{$rsp->margin}}</span></td>
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
    <?php $no ?>
      @endforeach
    <hr>
    {{-- <div class=" mx-auto text-center pt-3">
      <a href="/dashboard">
        <button type="button" class="btn btn-danger btn-lg">Lihat Detail</button>
      </a>
    </div> --}}
  </div>
</div>
<!-- total channel -->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-6" id="channel">Total Channel UseeTV</h2>

    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4 ">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Total Channel</h5>
            <p class="card-text">{{ $chn }} Channel</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Total Channel HD</h5>
            <p class="card-text">{{ $hd }} Channel</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Total Channel SD</h5>
            <p class="card-text">{{ $sd }} Channel</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 mx-auto text-center pt-3">
      <a href="/channels">
        <button type="button" class="btn btn-danger btn-lg">Lihat Detail</button>
      </a>
    </div>
  </div>
</div>

<!-- alpro -->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-6" id="alpro">Total Perangkat Headend</h2>

    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4 ">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">IRD</h5>
            <table class="table table-stripe">
              <thead>
                <tr>
                  <th>Jumlah : {{ $hitung }}</th>
                </tr>
                {{-- @foreach ($hitung as $ht) --}}
                <tr>
                  <td align="left">Harmonic : {{ $harmonic }} Unit </td>
                </tr>
                <tr>
                  <td align="left">Ericsson : {{ $ericsson }} Unit</td>
                </tr>
                {{-- @endforeach --}}
                
              </thead>
            </table>
            <a href="/list_ird" class="btn btn-success">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Encoder</h5>
            <table class="table table-stripe">
              <thead>
                <tr>
                  <th class="col-1">No</th>
                  <th>Lokasi</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
            </table>
            <a href="list_encoder.php" class="btn btn-success">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">HAllo</p>
            <a href="#" class="btn btn-success">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- report -->
{{-- <div class="container-fluid reporting pt-5 pb-5">
  <div class="container text-center">
    <h2 class="display-3" id="reporting">Reporting</h2>
    <p>Hallo</p>
    <div class="row pt-4">
      <div class="col-md-3">
        <i class="fas fa-exclamation-circle fa-3x"></i>
        <h3 class="mt-3">Channel Terganggu</h3>
        <table class="table table-stripe">
          <thead>
            <tr>
              <th>Nama channel</th>
            </tr>
          </thead>
        </table>
      </div>

      <div class="col-md-3">
        <i class="fas fa-exclamation-circle fa-3x"></i>
        <h3 class="mt-3">Dampak Gangguan</h3>
        <p>Video Blank</p>
      </div>

      <div class="col-md-2">
        <i class="fas fa-exclamation-circle fa-3x"></i>
        <h3 class="mt-3">Penyebab</h3>
        <p>Masih di investigasi</p>
      </div>

      <div class="col-md-2">
        <i class="fas fa-exclamation-circle fa-3x"></i>
        <h3 class="mt-3">Jam Start</h3>
        <p>10:30 WIB</p>
      </div>

      <div class="col-md-2">
        <i class="fas fa-exclamation-circle fa-3x"></i>
        <h3 class="mt-3">Status</h3>
        <p>Bein Sport 1 HD</p>
      </div>
    </div>
  </div>
</div> --}}
<!-- staff -->
{{-- <div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-3" id="staff">Tim Kami</h2>
    <p>
      Hallo
    </p>

    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4 text-center tim">
        <img src="images/muidz.jpg" class="rounded-circle mb-3" />
        <h4>Muidz Permadi Derma Suhendi</h4>
        <p>Staff Technical On Air & IT Broadcast</p>
        <p>
          <a href="https://www.instagram.com/muidzpermadi/?hl=id" class="social"><i class="fab fa-instagram"></i></a>
        </p>
      </div>
    </div>
  </div>
</div> --}}

<!-- kontak -->
{{-- <div class="container-fluid pt-5 pb-5 kontak">
  <div class="container">
    <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
    <p class="text-center">
      Hallo
    </p>

    <div class="row pb-3">
      <div class="col-md-6">
        <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama" />

        <input class="form-control form-control-lg mb-3" type="text" placeholder="Email" />

        <input class="form-control form-control-lg mb-3" type="text" placeholder="Nomor HP" />
      </div>

      <div class="col-md-6">
        <textarea class="form-control form-control-lg" rows="5"></textarea>
      </div>
    </div>
  </div>
</div> --}}


@include('footer')
