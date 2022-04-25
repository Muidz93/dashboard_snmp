<?php 
$statusVid = snmp2_get("192.168.112.3", "public",'.1.3.6.1.4.1.1773.1.3.208.3.3.3.0');
// echo $statusVid;
$statusVid = preg_replace('/"/', '', $statusVid);
str_replace("INTEGER: ","",$statusVid);

$value = str_replace("INTEGER: ","",$statusVid);

if ($value == "0"){
    echo "Video Running";
}else if ($value == "1"){
    echo "Video Stopped";
}else if ($value == "2"){
    echo "Video Error";
}
?>