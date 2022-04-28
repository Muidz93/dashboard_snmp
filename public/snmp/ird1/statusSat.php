<?php 
$status = snmp2_get("192.168.112.2", "public",'.1.3.6.1.4.1.1773.1.3.208.2.2.2.0');
$status = preg_replace('/"/', '', $status);
$status =str_replace("STRING: ","",$status);
str_replace("+","",$status);

$value = str_replace("+","",$status);

if ($value == "LOCKED"){
    echo "<font color='green'>LOCKED</font>";
}else if ($value == "UNLOCKED"){
    echo "<font color='red'>UNLOCKED</font>";
}
?>