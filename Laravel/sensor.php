<?php
$kalimat  = "Hari ini saya ingin pergi ke pasar";
$kata = array("saya", "pasar",);
$sensor   = array("*****", "*****",);
$kalimatnew = str_replace($kata, $sensor, $kalimat);

echo $kalimatnew
?>


