<h1>
<?php
echo "Bilgisayar Yüksek Mühendisi Öğr. Gör. Anıl Sezgin";
echo "</br>";
echo "Elektronik - Haberleşme Yüksek Mühendisi Yar. Doç. Dr. Cahit Karakuş";
echo "</br>";
$s1=20;
$s2=20;
$t=$s1+$s2;
echo $t;
echo "</br>";
$connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
$usd_buying = $connect_web->Currency[0]->BanknoteBuying;
$usd_selling = $connect_web->Currency[0]->BanknoteSelling;

$euro_buying = $connect_web->Currency[3]->BanknoteBuying;
$euro_selling = $connect_web->Currency[3]->BanknoteSelling;

echo 'USD Alış: '.$usd_buying.'<br>USD Satış: '.$usd_selling.'<br>';
echo 'EUR Alış: '.$euro_buying.'<br>EUR Satış: '.$euro_selling;

echo "</br>";
echo "merhaba","dünya";

$sayi1 = 1811210025;
var_dump($sayi1);

$buyukSayiKontrolu=false;

var_dump($buyukSayiKontrolu);

$dizi=array("eleman1","eleman2","eleman3");
var_dump($dizi);

$bosDegisken=null;
var_dump($bosDegisken);

$string1 = "Test";
echo strlen($string1);
echo "</br>";
echo str_word_count("bu bir testtir");
echo "</br>";
echo strrev("illuminati");
echo "</br>";
echo strpos("Hello World","World");
echo "</br>";
echo str_replace("Test3","Dunya","Merhaba Test3");
echo "</br>";
$testler=2313;
$sad=1.3;
echo is_int($testler);
echo "</br>";
echo is_float($sad);
echo "</br>";
var_dump(is_float($sad));
$sayi3=123;
var_dump(is_numeric($sayi3));
$float = 121.800;
$float_int = (int)$float;
echo $float_int;
echo "</br>";
define ("def1","Test Area51");
echo def1;
echo "</br>";
function test()
{
	echo "denemelers";
}
test();
echo "</br>";
$kontrol=50;
if($kontrol<30)
{
	echo "Sayı 30'dan küçük";
}
else
{
	echo "Sayı 30'dan büyük";
}
echo "</br>";
$kelime1="anastas";
$kelime2="satsana";
$temp=strrev($kelime1);
if($temp)
{
	echo "palindrom";
}
echo "</br>";
$tc = 11111111110;
$temp2=strlen($tc);
if($temp2==11)
{
	echo "Geçerli";
}
else
{
	echo "Hata";
}
echo "</br>";
$tc2 = 11111111110;
$temp3=strlen($tc2);
switch($temp3)
{
	case 11:
	echo "Geçerli";
	break;
	
	default:
	echo "Geçersiz";
	break;
}
echo "</br>";
$sat1 = 10;
while($sat1>=1)
{
	echo $sat1;
	echo "</br>";
	$sat1--;
}
echo "=================================";
echo "</br>";
$bir=0;
while($bir<=100)
{
	echo $bir;
	$bir = $bir + 2;
	echo "</br>";
}
echo "=================================";
echo "</br>";
for($sayi=0;$sayi<=100;$sayi = $sayi + 2)
{
	echo $sayi;
	echo "</br>";
}

$dizi_sayi = array(1,2,3,4,5,6,7,8,9);

for($i=0;$i<9;$i++)
{
	echo $dizi_sayi[$i];
}
echo "</br>";
echo "=================================";
echo "</br>";
$dizi_toplam = array(100,202,305,407,5509,600,107,98,199);
foreach($dizi_toplam as $toplam)
{
	echo $sayi;
	echo "</br>";
}
echo "=================================";
echo "</br>";
$dizi = array
(
	array("item1 ",10,20),
	array("item2 ",30,40),
	array("item3 ",50,60),
	array("item4 ",70,80),
	array("item5 ",90,100)
);
echo $dizi[0][0];
echo "</br>";
echo $dizi[0][1];
echo "</br>";
for($satir=0;$satir<5;$satir++)
{
	for($sutun=0;$sutun<3;$sutun++)
	{
		echo " ";
	echo $dizi[$satir][$sutun];
	}
	echo "</br>";
}
echo "=================================";
echo "</br>";
$dizi_say1=array(3,18,4,1,0,25);
rsort($dizi_say1);
for($c=0;$c<6;$c++)
{
	echo $dizi_say1[$c]," ";
}
echo "</br>";
if(isset($_POST['deneme']))
{
	echo "merhaba";
}
if(isset($_POST['deneme1']))
{
	echo "Yazdırın testi";
}
if(isset($_POST['deneme2']))
{
	$ad=$_POST['isim'];
	echo "merhaba ".$ad;
}
if(isset($_POST['deneme3']))
{
	$say1=$_POST['number'];
	for($i=0;$i<=$say1;$i++)
	{
		echo $i." ";
	}
}
if(isset($_POST['deneme4']))
{
	$say1=$_POST['number'];
	$say2=$_POST['number2'];
	for($i=$say1;$i<=$say2;$i++)
	{
		echo $i." ";
	}
}
/*if(isset($_POST['deneme5']))
{
	$say1=$_POST['number'];
	$say2=$_POST['number2'];
	for($i=$say1;$i<=$say2;$i+=)
	{
		echo $i;
	}
}*/
if(isset($_POST['deneme6'])&&$_POST['ad1']=="admin"&&$_POST['sifre']=="123")
{
	echo "Giris Basarili";
}
/*else if()
{
	echo "Kutucuklar boş bırakılamaz";
}*/
if(isset($_POST['deneme7']))
{
	$bilgi= $_POST['txt1'];
	echo "<input type='text' value='$bilgi'>";
}
echo "=================================";
echo "</br>";
echo "Soru";
echo "</br>";
$genelTop=0;
for($t=0;$t<100;$t++)
{
	$genelTop+= $t;
	if($genelTop>100)
	{
		break;
	}
	echo $genelTop;
	echo "</br>";
}
echo "=================================";
echo "</br>";
$p=10;
while($p>-10)
{
	$p--;
	if($p==0)
	{
		continue;
	}
	echo(10/$p). "<br";
}
?>
<form method="POST" action="">
<input type="SUBMIT" name="deneme" value="TEST">
<input type="SUBMIT" name="deneme1" value="Yazdır">
<input type="SUBMIT" name="deneme2" value="textbox">
<input type="SUBMIT" name="deneme3" value="Sayı Döndürme">
<input type="SUBMIT" name="deneme4" value="Sayı Arası">
<input type="SUBMIT" name="deneme5" value="Sayı Arası Top">
<input type="SUBMIT" name="deneme6" value="Giriş">
<input type="SUBMIT" name="deneme7" value="Bilgi">
<input type="SUBMIT" name="deneme8" value="Tahmin">
<br>
<input type="text" name="isim">
<br>
<input type="text" name="number">
<br>
<input type="text" name="number2">
<br>
<input type="text" name="ad1">
<br>
<input type="text" name="sifre">
<br>
<input type="text" name="txt1">
<br><input type="text" name="txt1">
<br>
<br>
</form>
</h1>