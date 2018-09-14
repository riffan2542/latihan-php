<?php
$uang = 50000;
$makanan = 25000;
$minuman =10000;
$total = ($makanan + $minuman);
$sisa =$uang - ($makanan + $minuman);
echo "uang hari RP.$uang<br>makanan:RP.$makanan<br>minuman:RP.$minuman<br>total belanja:RP.$total";
echo "<br>sisa uang hari :RP.$sisa";
if ($sisa >=10000){
    echo " <p style = color:aqua>hari adalah : orang yang <b>Sangat Hemat</b></p>";
}elseif($sisa >0){
    echo " <p style = color:aqua>hari adalah : orang yang <b>Hemat</b></p>";
}else {
    echo " <p style = color:aqua>hari adalah : orang yang <b>Boros</b></p>";
}
?>