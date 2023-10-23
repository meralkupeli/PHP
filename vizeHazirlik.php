<form method="POST" action="">
<input type="text" name="Sayi1"/>
</br>
<input type="text1" name="Sayi2"/>
</br>
<input type="text2" name="Sayi3"/>
</br>
<input type="SUBMIT" name="Button" value="Değerlendir"/>
</br>
</form>
<?php
if(isset($_POST['Button']))
{
	$s1=$_POST['Sayi1'];
	$s2=$_POST['Sayi2'];
	$s3=$_POST['Sayi3'];
	if($s1>$s2 && $s1>$s3)
	{
		echo $s1." diğer sayılardan daha büyüktür.";
		echo "</br>";
		if($s2==$s3)
		{
			echo $s1.">".$s2."=".$s3;
		}
		else if($s1==$s2)
		{
			echo $s1."=".$s2.">".$s3;
		}
		else if($s2>$s3)
		{
			echo $s1.">".$s2.">".$s3;
		}
		else
		{
			echo $s1.">".$s3.">".$s2;
		}
	}
	else if($s2>$s1 && $s2>$s3)
	{
		echo $s2." diğer sayılardan daha büyüktür.";
		echo "</br>";
		if($s1==$s3)
		{
			echo $s2.">".$s1."=".$s3;
		}
		else if($s2==$s1)
		{
			echo $s2."=".$s1.">".$s3;
		}
		else if($s1>$s3)
		{
			echo $s2.">".$s1.">".$s3;
		}
		else
		{
			echo $s2.">".$s3.">".$s1;
		}
	}
	else if($s3>$s1 && $s3>$s2)
	{
		echo $s3." diğer sayılardan daha büyüktür.";
		echo "</br>";
		if($s1==$s2)
		{
			echo $s3.">".$s1."=".$s2;
		}
		else if($s3==$s2)
		{
			echo $s3."=".$s2.">".$s1;
		}
		else if($s1>$s2)
		{
			echo $s3.">".$s1.">".$s2;
		}
		else
		{
			echo $s3.">".$s2.">".$s1;
		}
	}
	else if($s1==$s2 && $s1==$s3 && $s2==$s1 && $s2==$s3 && $s3==$s1 && $s3==$s2)
	{
		echo " Tüm sayılar eşittir.";
		echo "</br>";
		echo $s3."=".$s2."=".$s1;
	}
}
?>