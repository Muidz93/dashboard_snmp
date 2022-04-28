<?php 
$service = snmp2_get("192.168.112.4", "public",'.1.3.6.1.4.1.1773.1.3.208.4.1.2.0');
// echo $service;
$service = preg_replace('/"/', '', $service);
echo str_replace("INTEGER: ","",$service);
?>