<?php
$data = $_GET['testRadio'];
echo $data;
echo "</br>";
$veri=$_GET['buton'];
$sayi1 = $_GET['field'];
$sayi2 = $_GET['field1'];
$sonuc=0;
if($veri=="toplama")
{
	$sonuc=$sayi1+$sayi2;
	echo "Toplam= ".$sonuc;
}
else if($veri=="cikarma")
{
	$sonuc=$sayi1-$sayi2;
	echo "Çıkarma= ".$sonuc;
}
else if($veri=="carpma")
{
	$sonuc=$sayi1*$sayi2;
	echo "Çarpma= ".$sonuc;
}
else if($veri=="carpma")
{
	$sonuc=$sayi1*$sayi2;
	echo "Çarpma= ".$sonuc;
}
else if($veri=="bolme")
{
	$sonuc=$sayi1*$sayi2;
	echo "Bölme= ".$bolme;
}
?>