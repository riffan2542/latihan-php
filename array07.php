<?php
$arrNilai = array("Ani" =>80 ,"Otim" =>90, "Sri" =>75, "Budi" =>85);
echo "<b>array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "<pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>array setelah pengurutan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "<pore>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>array setelah pengurutan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "<pre>";
?>