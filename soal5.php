<?php
function luas_segitiga($alas, $tinggi){
    return 1/2 * ($alas*$tinggi);
}
$a = 12;
$t = 8;
echo "Luas segitiga alas $a dan tinggi $t = ";
echo luas_segitiga($a, $t);
echo "cm";