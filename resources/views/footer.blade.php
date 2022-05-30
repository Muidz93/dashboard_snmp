<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  $(document).ready(function() {
            setInterval(function() {
              // $("#cekmargin1").load("snmp/ird1/margin.php").text();
              // $("#cekservice1").load("snmp/ird1/service.php").text();
              // $("#cekkualitas1").load("snmp/ird1/kualitas.php").text();
              // $("#cekbitrate1").load("snmp/ird1/bitrate.php").text();
              // $("#cekstatusSat1").load("snmp/ird1/statusSat.php").text();
              // $("#cekstatus1").load("snmp/ird1/statusVid.php").text();
              // // =================================================
              // $("#cekmargin2").load("snmp/ird2/margin.php").text();
              // $("#cekservice2").load("snmp/ird2/service.php").text();
              // $("#cekkualitas2").load("snmp/ird2/kualitas.php").text();
              // $("#cekbitrate2").load("snmp/ird2/bitrate.php").text();
              // $("#cekstatusSat2").load("snmp/ird2/statusSat.php").text();
              // $("#cekstatus2").load("snmp/ird2/statusVid.php").text();
              // // =================================================
              // $("#cekmargin3").load("snmp/ird3/margin.php").text();
              // $("#cekservice3").load("snmp/ird3/service.php").text();
              // $("#cekkualitas3").load("snmp/ird3/kualitas.php").text();
              // $("#cekbitrate3").load("snmp/ird3/bitrate.php").text();
              // $("#cekstatusSat3").load("snmp/ird3/statusSat.php").text();
              // $("#cekstatus3").load("snmp/ird3/statusVid.php").text();
              // $("#cekstatusIp3").load("snmp/ird3/statusIp.php").text();
              // // =================================================
              // $("#cekmargin4").load("snmp/ird4/margin.php").text();
              // $("#cekservice4").load("snmp/ird4/service.php").text();
              // $("#cekkualitas4").load("snmp/ird4/kualitas.php").text();
              // $("#cekbitrate4").load("snmp/ird4/bitrate.php").text();
              // $("#cekstatusSat4").load("snmp/ird4/statusSat.php").text();
              // $("#cekstatus4").load("snmp/ird4/statusVid.php").text();
              // $("#cekstatusIp4").load("snmp/ird4/statusIp.php").text();
              // // =================================================
              // $("#cekmargin5").load("snmp/ird5/margin.php").text();
              // $("#cekservice5").load("snmp/ird5/service.php").text();
              // $("#cekkualitas5").load("snmp/ird5/kualitas.php").text();
              // $("#cekbitrate5").load("snmp/ird5/bitrate.php").text();
              // $("#cekstatusSat5").load("snmp/ird5/statusSat.php").text();
              // $("#cekstatus5").load("snmp/ird5/statusVid.php").text();
              // // =================================================
              // $("#cekmargin6").load("snmp/ird6/margin.php").text();
              // $("#cekservice6").load("snmp/ird6/service.php").text();
              // $("#cekkualitas6").load("snmp/ird6/kualitas.php").text();
              // $("#cekbitrate6").load("snmp/ird6/bitrate.php").text();
              // $("#cekstatusSat6").load("snmp/ird6/statusSat.php").text();
              // $("#cekstatus6").load("snmp/ird6/statusVid.php").text();
              // =================================================
              for (let index = 1; index <= 6; index++) {
                $('#margin'+index).load(location.href + ' #margin'+index );
                $('#bitrate'+index).load(location.href + ' #bitrate'+index );
                $('#status_sat'+index).load(location.href + ' #status_sat'+index );
                $('#status_ip'+index).load(location.href + ' #status_ip'+index );
                $('#status_vid'+index).load(location.href + ' #status_vid'+index );
                }
                // $satelit = $(`#status`).text();
                // if ($satelit == "locked") {
                //   $('#status').css('color', '#4285F4');
                // }
              // =================================================
              // $("#test").load("snmp/ird.php").text();
            }, 1000);
        });
</script>
{{-- <script type="text/javascript">
    setInterval(ulang, 1000);
  function ulang() {
    var container = document.getElementById("isi");
    var content = container.innerHTML;
    container.innerHTML= content; 
  }
</script> --}}
{{-- <script type='text/javascript' src={{url('/js/script.js')}}></script> --}}
<footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p>Powered by : <a class=" font-italic text-dark" href="https://getbootstrap.com/">bootstrap</a>
            <p class="text-dark">© 2022 Copyright: Dari Kita Untuk Kita</p>
            </p>
        </div>
        <!-- Copyright -->
    </footer>

</body>
</html>