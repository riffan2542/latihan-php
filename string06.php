<?php
$str = "<b><u>Everything I do, I do it for you</u></b>";

echo $str."<br>";
//no tag HTML
echo strip_tags($str) ."<br>";
//tampil apa adanya
echo htmlspecialhars($str) . "<br>";
//tampil apa adanya
echo htmlentities($str);
?>