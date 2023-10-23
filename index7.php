<?php
$dizi[] = "eleman1";
$dizi[] = "eleman2";
$dizi[] = "eleman3";
$dizi[] = "eleman4";

echo $dizi[2];
echo "<br>";
echo "================";
echo "<br>";

for($i=0;$i<4;$i++)
{
	echo $dizi[$i];
	echo "<br>";
}
echo "================";
echo "<br>";

$dizi2[] = "eleman1";
$dizi2[] = "eleman2";
$dizi2[] = "eleman3";

echo $dizi2['ad'] = "Bugrahan";
echo "<br>";
echo $dizi2['soyad'] = "Boykiz";
echo "<br>";
echo $dizi2['numara'] = "123123123";
echo "<br>";
echo "================";
echo "<br>";

$p1 = array("copier","inkjet","laser","photo");
echo "p1 elemani: ".$p1[2]."<br>";

$p2 = array
(
'copier' => "Copier & Mulripurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper",
);
echo "p2 elemani: ".$p2['photo'];
echo "<br>";
echo "================";
echo "<br>";
$total = 0;
foreach($p1 as $eleman)
{
	$total++;
	echo $eleman;
	echo "<br>";
}
echo $total;
?>