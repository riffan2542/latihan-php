<?php
$arrNilai = array("Ani" =>80,"Otim" =>90, "Sri"=>75,"Budi" =>85);
echo "<b>array sebelum pengurutan</b>";
echo "<pre>";
print_r ($arrNilai);
echo "<pre>";

sort($arrNilai);
reset($arrNilai);
echo "<b>array setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "<pre>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>array setelah pengurutan dengan rsot()</b>";
echo "<pre>";
print_r($arrNilai);
echo "<pre>";
?>