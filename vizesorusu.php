<?php
$sayi1=rand(1,100);
$sayi2=rand(1,100);
if($sayi1>$sayi2)
{
	for($i=$sayi2;$i<$sayi1;$i++)
	{
		echo " ".$i;
	}
}
else
{
	for($j=$sayi1;$j<$sayi2;$j++)
	{
		echo " ".$j;
	}
}
?>