<?php 
$status = snmp2_get("192.168.112.3", "public",'.1.3.6.1.4.1.1773.1.3.208.2.2.2.0');
$status = preg_replace('/"/', '', $status);
$status =str_replace("STRING: ","",$status);
echo str_replace("+","",$status);
?>