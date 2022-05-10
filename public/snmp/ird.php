<?php 
include '../koneksi.php';
$sql = mysqli_query($koneksi, 'SELECT * FROM snmps');
$data=mysqli_num_rows($sql);
echo $data;
for ($id=1; $id <= $data; $id++) { 
    $ip=$id+1;
        $bitrate = snmp2_get("192.168.112.$ip", "public",'.1.3.6.1.4.1.1773.1.3.208.3.3.9.0');
        // echo $bitrate;
        $bitrate = preg_replace('/"/', '', $bitrate);
        $bitrate= str_replace("INTEGER: ","",$bitrate);
        $kualitasx = snmp2_get("192.168.112.$ip", "public",'.1.3.6.1.4.1.1773.1.3.208.3.3.8.0');
        $kualitasy = snmp2_get("192.168.112.$ip", "public",'.1.3.6.1.4.1.1773.1.3.208.3.3.7.0');

        // echo $kualitas;
        $kualitasx = preg_replace('/"/', '', $kualitasx);
        $kualitasx =  str_replace("INTEGER: ","",$kualitasx);
        $kualitasy = preg_replace('/"/', '', $kualitasy);
        $kualitasy =  str_replace("INTEGER: ","",$kualitasy);
        $kualitas = $kualitasx."x".$kualitasy;

        $status = snmp2_get("192.168.112.$ip", "public",'.1.3.6.1.4.1.1773.1.3.208.2.2.2.0');
        $status = preg_replace('/"/', '', $status);
        $status =str_replace("STRING: ","",$status);
        str_replace("+","",$status);

        $status_sat = str_replace("+","",$status);


        // for ($id=1; $id < 6; $id++) { 
            
        // }
        $status_ip = snmp2_get("192.168.112.$ip", "public",'.1.3.6.1.4.1.1773.1.3.208.3.4.4.1.3.1');
        $status_ip = preg_replace('/"/', '', $status_ip);
        $status_ip =str_replace("STRING: ","",$status_ip);
        str_replace("+","",$status_ip);

        $status_ip = str_replace("+","",$status_ip);

        if ($status_ip == "RUNNING" ){
            $status_ip= "LOCKED";
        }else if ($status_ip == "ERROR" || $status_ip == "STOPPED"){
            $status_ip= "UNLOCKED";
        }
        $margin = snmp2_get("192.168.112.$ip", "public",'.1.3.6.1.4.1.1773.1.3.208.2.2.6.0');
        $margin = preg_replace('/"/', '', $margin);
        $margin =str_replace("STRING: ","",$margin);
        $margin= str_replace("+","",$margin);


        // echo $service;
        $service = snmp2_get("192.168.112.$ip", "public",'.1.3.6.1.4.1.1773.1.3.208.4.1.2.0');
        $service = preg_replace('/"/', '', $service);
        $service = str_replace("INTEGER: ","",$service);

        $statusVid = snmp2_get("192.168.112.$ip", "public",'.1.3.6.1.4.1.1773.1.3.208.3.3.3.0');
        // echo $statusVid;
        $statusVid = preg_replace('/"/', '', $statusVid);
        $statusVid=str_replace("INTEGER: ","",$statusVid);

        // status video

        if ($statusVid == 0){
        $statusVid = "Video Running";
        }else if ($statusVid == 1){
        $statusVid = "Video Stopped";
        }else if ($statusVid == 2){
        $statusVid = "Video Error";
        }
        mysqli_query($koneksi, "UPDATE snmps SET video_bitrate='$bitrate', kualitas='$kualitas',status_sat='$status_sat',margin='$margin',status_ip='$status_ip',service='$service',status_video='$statusVid' WHERE ID = $id");
        // echo "berhasil";
}

?>