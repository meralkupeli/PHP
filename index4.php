<?php
//$dizi = array("eleman1","eleman2","eleman3","eleman4");

$x="eleman1";
$y="eleman2";
$z="eleman3";

$dizi = deneme($x,$y,$z);

echo $dizi[1];

function deneme($a,$b,$c)
{
	return array($a,$b,$c);
}
?>