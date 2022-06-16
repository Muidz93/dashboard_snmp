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
          <i class="bi bi-broadcast-pin" style="font-size: 5rem;"></i>
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
          <i class="bi bi-box2-fill" style="font-size: 5rem;"></i>
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
          <i class="bi bi-boombox-fill" style="font-size: 5rem;"></i>
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
<hr>
<!-- Monit IRD -->
<div class="container-fluid pt-5 pb-2 bg-light">
  <div class="container text-center">
    <h2 class="display-6" id="#">Monitoring Status IRD Live</h2>
    <a href="/" class="btn btn-warning"><i class="bi bi-arrow-clockwise"></i></a>
    <div class="row pt-4 gx-4 gy-4">
      <div class="table-responsive">
        <table class="table table-stripe table-hover">
            <thead class="bg-dark text-white">
                <tr>
                    <th>List IRD</th>
                    <th>Alamat IP</th>
                    <th>Satelit</th>
                    <th>IP Input</th>
                    <th>Status Video</th>
                    {{-- <th>Margin</th>
                    <th>Bitrate</th> --}}
                    <th class="col-2">Realtime</th>
                </tr>
            </thead>
            <tbody>
              <?php $no=1 ?>
              @foreach ($snmp as $rsp)
              <tr>
                <th scope="row">IRD {{$no}}</th>
                <th>{{$rsp->ip_control}}</th>
                <td><span id="status_sat{{$no}}">{{$rsp->status_sat}}</span></td>
                <td><span id="status_ip{{$no}}">{{$rsp->status_ip}}</span></td>
                <td><span id="status_video{{$no}}">{{$rsp->status_video}}</span></td>
                {{-- <td><span id="margin{{$no}}">{{$rsp->margin}}</span> dB</td>
                <td><span id="bitrate{{$no}}">{{$rsp->video_bitrate}}</span></td> --}}
                <td>
                  <a href="/ird/{{$rsp->id}}"><button class="btn btn-info"><i class="bi bi-eye" style="color:white;"></i></button></a>
                </td>
              </tr>
              <?php $no++; ?>
              @endforeach
            </tbody>
        </table>
        </div>
    </div>
  </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript">
  // $(document).ready(function() {
  //           setInterval(function() {
  //             for (let index = 1; index <= 6; index++) {
  //               $('#status_sat'+index).load(location.href + ' #status_sat'+index );
  //               $('#status_ip'+index).load(location.href + ' #status_ip'+index );
  //               $('#status_video'+index).load(location.href + ' #status_video'+index );
  //               $('#status_sat'+index).text() == "LOCKED" ?  $('#status_sat'+index).css({"color":"green"}) : $('#status_sat'+index).css({"color":"red"}); 
  //               $('#status_ip'+index).text() == "LOCKED" ?  $('#status_ip'+index).css({"color":"green"}) : $('#status_ip'+index).css({"color":"red"}); 
  //               $('#status_video'+index).text() == "Video Running" ?  $('#status_video'+index).css({"color":"green"}) : $('#status_video'+index).css({"color":"red"}); 
  //               }
  //             // $("#test").load("snmp/ird.php").text();
  //           }, 1000);
  //       });
</script>
@include('footer')
