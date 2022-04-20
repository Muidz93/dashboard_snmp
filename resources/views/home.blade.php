@include('header')
<!-- banner -->
<div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-6 mt-3 mb-3">Selamat Datang</h4>
  </div>
</div>

<!-- total channel -->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-3" id="channel">Total Channel UseeTV</h2>
    <p>Hallo</p>

    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Total Channel</h5>
            <p class="card-text">{{ $chn }} Channel</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Total Channel HD</h5>
            <p class="card-text">{{ $hd }} Channel</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
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
      <a href="/channel">
        <button type="button" class="btn btn-danger btn-lg">Lihat Detail</button>
      </a>
    </div>
  </div>
</div>

<!-- alpro -->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-3" id="alpro">Total Perangkat Headend</h2>

    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4">
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
            <a href="/list_ird" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
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
            <a href="list_encoder.php" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card crop-img">
          <i class="fas fa-tv fa-3x"></i>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">HAllo</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- report -->
<div class="container-fluid reporting pt-5 pb-5">
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
</div>
<!-- staff -->
<div class="container-fluid pt-5 pb-5 bg-light">
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
</div>

<!-- kontak -->
<div class="container-fluid pt-5 pb-5 kontak">
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@include('footer')
