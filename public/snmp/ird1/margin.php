<?php 
$margin = snmp2_get("192.168.112.2", "public",'.1.3.6.1.4.1.1773.1.3.208.2.2.6.0');
$margin = preg_replace('/"/', '', $margin);
$margin =str_replace("STRING: ","",$margin);
echo str_replace("+","",$margin);
?>