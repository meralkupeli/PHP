<?php
$a = 56;
$b = 12;
$c = $a/$b;

echo (int)$c; //explicit casting
//int, bool, float, double, real, string, array, object, print(Yazdırma parantezli),

echo "<br>";

$t = "merhaba";

echo strrev($t);
echo "<br>";

deneme("Buğrahan","Boykız");
echo "<br>";

$d = deneme2($ad2,$soyad2);

echo $d;

function deneme($ad,$soyad)
{
	echo "Merhaba ".$ad." ".$soyad;
}
function deneme2($ad2,$soyad2)
{
	return $ad2." ".$soyad2;
}
?>