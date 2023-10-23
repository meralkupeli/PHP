<form method="post" action="">
<input type="text" name="yazi"/>
<input type="submit" name "click"/>
</form>
<html>
<?php
$s1=100;
if(isset($_POST['click']))
{
	$s2=$_POST['yazi'];
	if($s2<$s1)
	{
		echo $s2."<".$s1;
	}
	else if($s2>$s1)
	{
		echo $s2.">".$s1;
	}
	else
	{
		echo $s2."=".$s1;
	}
}
	
// $ değişken tanımlama
$variable = 10;
// yazdırma echo
echo "".$variable; // sonuna değişken koyma nokta ile olmaktadır.
printf("aa");

echo "</br>";
echo "aaa";
echo "</br>";
echo "bbb";
echo "</br>";

$dizi = array(3,5,1,2,3);
$sayi=1;
for($i=0;$i<5;$i++)
{
	$sayi*=$dizi[$i];
}
if($sayi%7==0)
{
	echo "Sonuç: ". $sayi;
	echo "</br>";
}
else
{
	echo "Sonuç yediye bölünemez";
	echo "</br>";
}

echo "www\teee"; // escape character "/"
echo "</br>";
echo "aa \"bb\"";
?>
</html>