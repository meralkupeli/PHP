<form method="POST" action="">
<input type="text" name="Sayi1"/>
</br>
<input type="text1" name="Sayi2"/>
</br>
<input type="text2" name="Sayi3"/>
</br>
<input type="SUBMIT" name="Button" value="Ölç"/>
</br>
</form>
<?php
if(isset($_POST['Button']))
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
				echo "En büyük sayı Sayı 1: ".$s1.", sonra Sayı 2 sonra Sayı 3";
			
			else
				echo "En büyük sayı Sayı 1: ".$s1.", sonra Sayı 3 sonra Sayı 2";
			
		}
		else if($s2>$s1 && $s2>$s3)
		{
			if($s1>$s3)
				echo "En büyük sayı Sayı 2: ".$s2.", sonra Sayı 1 sonra Sayı 3";
			else
				echo "En büyük sayı Sayı 2: ".$s2.", sonra Sayı 3 sonra Sayı 1";
		}
		else 
		{
			if($s2>$s1)
				echo "En büyük sayı Sayı 3: ".$s3.", sonra Sayı 2 sonra Sayı 1";
			else
				echo "En büyük sayı Sayı 3: ".$s3.", sonra Sayı 1 sonra Sayı 2";
		}
	}
}
?>