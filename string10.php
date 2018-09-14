<?php
$file = "test.this.txt";
$exit1 = strstr($file, ".");
$exit2 = strchr($file, ".");
$exit3 = strrchr($file, ".");

echo $exit1. "<br>"; //.this.txt
echo $exit2. "<br>"; //.this.txt
echo $exit3;         //.this
?>