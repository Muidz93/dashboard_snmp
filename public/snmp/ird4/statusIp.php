<?php 
$status = snmp2_get("192.168.112.5", "public",'.1.3.6.1.4.1.1773.1.3.208.3.4.4.1.3.1');
$status = preg_replace('/"/', '', $status);
$status =str_replace("STRING: ","",$status);
str_replace("+","",$status);

$value = str_replace("+","",$status);

if ($value == "RUNNING"){
    echo "<font color='green'>LOCKED</font>";
}else if ($value == "ERROR"){
    echo "<font color='red'>UNLOCKED</font>";
}
?>