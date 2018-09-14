<?Php
$a = 5;
$b = 5;
$c = false;

echo "$a == $b :". ($a == $b);
echo "<br> $a != $b : ". ($a != $b);
echo "<br> $a > $b : ". ($a > $b);
echo "<br> $a < $b : ". ($a < $b);
echo "<br> ($a == $b) && ($a > $b) : ". (($a == $b) && ($a > $b));
echo "<br> ($a == $b) || ($a > $b) : ". (($a != $b) || ($a > $b));
echo "<br> ($a == $b) xor ($a > $b)  : ". (($a == $b) xor ($a < $b));
echo "<br> hasilnya adalah ". ($a<=$b);
?>