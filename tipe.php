<?php
$nim = "0411500400";
$nama = 'Riffan';
$umur = 16;
$nilai = 82.25;
$status = true;
echo "Nim : " . $nim . "<br>";
echo "Nama : $nama <br>";
print "Umur : " . $umur;
print "<br>";
printf("nilai : %.3f<br>", $nilai);
if ($status) {
    echo "Status : Aktif";
} else {
    echo "Status : Tidak Aktif";
}
?>