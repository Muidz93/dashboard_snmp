<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  $(document).ready(function() {
            setInterval(function() {
              for (let index = 1; index <= 6; index++) {
                $('#margin'+index).load(location.href + ' #margin'+index );
                $('#bitrate'+index).load(location.href + ' #bitrate'+index );
                $('#status_sat'+index).load(location.href + ' #status_sat'+index );
                $('#status_ip'+index).load(location.href + ' #status_ip'+index );
                $('#status_vid'+index).load(location.href + ' #status_vid'+index );
                }
              // $("#test").load("snmp/ird.php").text();
            }, 1000);
        });
</script>