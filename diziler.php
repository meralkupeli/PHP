<?php
//Dizi - Array

$sehir[] = "istanbul";
$sehir[] = "ankara";
$sehir[] = "izmir";

$sehir[3] = "antalya";
$sehir[4] = "adana";
$sehir[5] = "bursa";

//echo $sehir[0]."<br>".$sehir[1]."<br>".$sehir[2];

$ogrenci[20] = "anil";
$ogrenci[40] = "bugra";
$ogrenci[60] = "rabia";
$ogrenci[] = "busra";

$sayilar = array(1,5,9,14,27);
echo $sayilar[1];
echo "<br/>";
echo "<br/>";

for($i=0;$i<6;$i++)
{
	echo $sehir[$i]."<br/>";
}
echo $ogrenci[61]; //--> busra değişkeni en sona doğru ekliyor tepeyi doldurmuyor.
echo "<br/>";
echo "<br/>";

//String-Indexed Array
$ulke["tr"] = "Türkiye";
$ulke["ca"] = "Kanada";
$ulke["usd"] = "Amerika";
$ulke["de"] = "Almanya";

$ulke2 = array("ca" => "Kanada",
			   "tr" => "Türkiye",
			   "de" => "Almanya",
			   "usa" => "Amerika");
			   
while(list($key,$val) = each($ulke2))
{
	echo "Key: ".$key.", Value: ".$val."<br/>";
}
echo "<br/>";

$kitalar =array("Avrupa" => array("almanya","ingiltere"), "Kuzey Amerika" =>array("amerika","kanada","alaska"));
echo $kitalar["Avrupa"][1];
echo "<br/>";
echo $kitalar["Kuzey Amerika"][1];
echo "<br/>";
echo "<br/>";

$ulkeKodlari = array("tr","uk","us","ca","de");
$sayilar = array(10,2400,670,80);
sort($ulkeKodlari);
sort($sayilar);
for($i=0;$i<count($ulkeKodlari);$i++)
{
	echo $ulkeKodlari[$i]."<br/>";
}
//key: soru numarası, 1.sütun doğru cevap, 2.sütun kullanıcının cevabı
//array tanımlanıcak 2 boyutlu array("1" => array("A","B"),
//                                   "2" => array("A","B"),
//                                   "3" => array("A","B"),
//                                   "4" => array("A","B"),
//                                   "5" => array("A","B"));
?>