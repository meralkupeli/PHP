<?php
$dizi = array("A","B","C","D","E",1,2,3,4,5);
shuffle($dizi);
echo "Shuffle: ";
for($i=0;$i<count($dizi);$i++)
{
	echo $dizi[$i];
	
}
echo "<br/>";
$sifre=array();
$harfler=array("A","B","C","D","E");
$sayilar=array(1,2,3,4,5);
for($i=0;$i<count($harfler);$i++)
{
	$sayi=rand(0,4);
	//echo $harfler[$sayi];
	array_push($sifre,$harfler[$sayi]);
}
for($i=0;$i<count($sayilar);$i++)
{
	$sayi=rand(0,4);
	//echo $sayilar[$sayi];
	array_push($sifre,$sayilar[$sayi]);
}
shuffle($sifre);
echo "Shuffle + 2 for: ";
for($i=0;$i<count($sifre);$i++)
{
	echo $sifre[$i];
}
echo "<br/>";

$son=array();
$kucuk=array("a","b","c","d","e","f","g","h");
$buyuk=array("A","B","C","D","E","F","G","H");
$sayilar1=array(1,2,3,4,5,6,7,8,9,0);
for($i=0;$i<count($kucuk);$i++)
{
	$rnd=rand(0,7);
	array_push($son,$kucuk[$rnd]);
}
for($i=0;$i<count($buyuk);$i++)
{
	$rnd=rand(0,7);
	array_push($son,$buyuk[$rnd]);
}
for($i=0;$i<count($sayilar1);$i++)
{
	$rnd=rand(0,9);
	array_push($son,$sayilar1[$rnd]);
}
shuffle($son);
echo "Shuffle + 3 for + 1 if: ";
for($i=0;$i<count($son);$i++)
{
	if(($i+1)%4==0)
	{echo "-";}
	else
	{
		echo $son[$i];
	}
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "10^3=?";
echo "<br/>";
$cevaplar=array(10,100,1000,10000);
shuffle($cevaplar);
for($i=0;$i<4;$i++)
{
	echo "<input type='radio' name='cevap' value='$cevaplar[$i]'/>".$cevaplar[$i]."<br/>";
}
if(isset($_POST['buton']))
{
	
}
?>
<br/>
<input type="submit" name="buton"/>