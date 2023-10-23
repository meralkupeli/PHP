<?php
$a = "Bugrahan";
deneme();
echo $a;

function deneme()
{
	global $a;
	$a = strrev($a);
}
echo "<br>";

$t;

toplama(5,5);

function toplama($sayi1,$sayi2)
{
	global $t;
	$t = $sayi1+$sayi2;
	echo $t;
}
?>