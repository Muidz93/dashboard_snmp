 <?php 
$kualitasx = snmp2_get("192.168.112.3", "public",'.1.3.6.1.4.1.1773.1.3.208.3.3.8.0');
$kualitasy = snmp2_get("192.168.112.3", "public",'.1.3.6.1.4.1.1773.1.3.208.3.3.7.0');

// echo $kualitas;
$kualitasx = preg_replace('/"/', '', $kualitasx);
$kualitasx =  str_replace("INTEGER: ","",$kualitasx);
$kualitasy = preg_replace('/"/', '', $kualitasy);
$kualitasy =  str_replace("INTEGER: ","",$kualitasy);
echo $kualitasx."x".$kualitasy;
?>