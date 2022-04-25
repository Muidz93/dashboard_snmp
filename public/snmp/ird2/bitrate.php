<?php 
$bitrate = snmp2_get("192.168.112.3", "public",'.1.3.6.1.4.1.1773.1.3.208.3.3.9.0');
// echo $bitrate;
$bitrate = preg_replace('/"/', '', $bitrate);
echo str_replace("INTEGER: ","",$bitrate);
?>