<form method="POST" action="">
<input type="text1" name="Ad"/>
</br>
<input type="text2" name="SoyAd"/>
</br>
<input type="SUBMIT" name="Button" value="Yaz"/>
</br>
</br>
<input type="text1" name="Sayi1"/>
</br>
<input type="text2" name="Sayi2"/>
</br>
<input type="text3" name="Sayi3"/>
</br>
<input type="SUBMIT" name="Button1" value="Hesapla"/>
</form>
<?php
$sayi=rand(15,30);
echo "Rastgele bir sayı: ";
echo $sayi;
echo "</br>";
if(isset($_POST['Button']))
{
	$isim=$_POST['Ad'];
	$soy=$_POST['SoyAd'];
	echo "Ad: ".$isim;
	echo "</br>";
	echo "SoyAd: ".$soy;
}
echo "</br>";
if(isset($_POST['Button1']))
{
	$s1=$_POST['Sayi1'];
	$s2=$_POST['Sayi2'];
	$s3=$_POST['Sayi3'];
	if($s1==$s2 && $s1==$s3 && $s2==$s3)
	{	
		echo "Tüm sayılar birbirine eşittir.</br>"; 
		echo $s1."=".$s2."=".$s3;
	}
	else
	{
		if($s1>$s2 && $s1>$s3)
		{
			if($s2>$s3)
			{
				echo $s1.">".$s2.">".$s3;
			}
			else if($s3>$s2)
			{
				echo $s1.">".$s3.">".$s2;
			}
			else if($s3==$s2)
			{
				echo $s1.">".$s3."=".$s2;
			}
		}
		else if($s2>$s3 && $s2>$s1)
		{
			if($s3>$s1)
			{
				echo $s2.">".$s3.">".$s1;
			}
			else if($s1>$s3)
			{
				echo $s2.">".$s1.">".$s3;
			}
			else if($s3==$s1)
			{
				echo $s2.">".$s3."=".$s1;
			}
		}
		else if($s3>$s2 && $s3>$s1)
		{
			if($s2>$s1)
			{
				echo $s3.">".$s2.">".$s1;
			}
			else if($s1>$s2)
			{
				echo $s3.">".$s1.">".$s2;
			}
			else if($s2==$s1)
			{
				echo $s3.">".$s2."=".$s1;
			}
		}
	}
}
echo "</br>";
$sayilar = array(123,50,9,10,21,46);
$array_size = count($sayilar);
echo "Sayılar, kabarcık sıralamadan önce: ";
for($i=0;$i<$array_size;$i++)
{
	echo " ".$sayilar[$i];
}
echo "</br>";
for($i=0;$i<$array_size;$i++)
{
	for($j=0;$j<$array_size;$j++)
	{
		if($sayilar[$i]<$sayilar[$j])
		{
			$temp=$sayilar[$i];
			$sayilar[$i]=$sayilar[$j];
			$sayilar[$j]=$temp;
		}
	}
}
echo "Sayılar, kabarcık sıralamadan sonra: ";
for($i=0;$i<$array_size;$i++)
{
	echo " ".$sayilar[$i];
}
?>