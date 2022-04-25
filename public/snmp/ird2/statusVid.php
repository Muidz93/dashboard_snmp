<?php 
$statusVid = snmp2_get("192.168.112.3", "public",'.1.3.6.1.4.1.1773.1.3.208.3.4.4.1.3.1');
// echo $statusVid;
$statusVid = preg_replace('/"/', '', $statusVid);
echo str_replace("STRING: ","",$statusVid);
?>