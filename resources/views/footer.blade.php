<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
            setInterval(function() {
              $("#cekmargin1").load("snmp/ird1/margin.php").text();
              $("#cekservice1").load("snmp/ird1/service.php").text();
              $("#cekkualitas1").load("snmp/ird1/kualitas.php").text();
              $("#cekbitrate1").load("snmp/ird1/bitrate.php").text();
              $("#cekstatusSat1").load("snmp/ird1/statusSat.php").text();
              $("#cekstatus1").load("snmp/ird1/statusVid.php").text();
              // =================================================
              $("#cekmargin2").load("snmp/ird2/margin.php").text();
              $("#cekservice2").load("snmp/ird2/service.php").text();
              $("#cekkualitas2").load("snmp/ird2/kualitas.php").text();
              $("#cekbitrate2").load("snmp/ird2/bitrate.php").text();
              $("#cekstatusSat2").load("snmp/ird2/statusSat.php").text();
              $("#cekstatus2").load("snmp/ird2/statusVid.php").text();
              // =================================================
              $("#cekmargin3").load("snmp/ird3/margin.php").text();
              $("#cekservice3").load("snmp/ird3/service.php").text();
              $("#cekkualitas3").load("snmp/ird3/kualitas.php").text();
              $("#cekbitrate3").load("snmp/ird3/bitrate.php").text();
              $("#cekstatusSat3").load("snmp/ird3/statusSat.php").text();
              $("#cekstatus3").load("snmp/ird3/statusVid.php").text();
              $("#cekstatusIp3").load("snmp/ird3/statusIp.php").text();
              // =================================================
              $("#cekmargin4").load("snmp/ird4/margin.php").text();
              $("#cekservice4").load("snmp/ird4/service.php").text();
              $("#cekkualitas4").load("snmp/ird4/kualitas.php").text();
              $("#cekbitrate4").load("snmp/ird4/bitrate.php").text();
              $("#cekstatusSat4").load("snmp/ird4/statusSat.php").text();
              $("#cekstatus4").load("snmp/ird4/statusVid.php").text();
              $("#cekstatusIp4").load("snmp/ird4/statusIp.php").text();
              // =================================================
              $("#cekmargin5").load("snmp/ird5/margin.php").text();
              $("#cekservice5").load("snmp/ird5/service.php").text();
              $("#cekkualitas5").load("snmp/ird5/kualitas.php").text();
              $("#cekbitrate5").load("snmp/ird5/bitrate.php").text();
              $("#cekstatusSat5").load("snmp/ird5/statusSat.php").text();
              $("#cekstatus5").load("snmp/ird5/statusVid.php").text();
              // =================================================
              $("#cekmargin6").load("snmp/ird6/margin.php").text();
              $("#cekservice6").load("snmp/ird6/service.php").text();
              $("#cekkualitas6").load("snmp/ird6/kualitas.php").text();
              $("#cekbitrate6").load("snmp/ird6/bitrate.php").text();
              $("#cekstatusSat6").load("snmp/ird6/statusSat.php").text();
              $("#cekstatus6").load("snmp/ird6/statusVid.php").text();
            }, 1000);
        });
</script>
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