<?php
error_reporting(E_ALL ^ E_DEPRECATED);
/*$str="test";
echo(substr("anil",1));
echo "<br/>";
echo(substr($str,1));
echo "<br/>";
$str2= "sagdansola";
echo (substr($str2,-3));
echo "<br/>";
echo trim("gereksiz     boşluk  silmece");
echo "<br/>";
printf("C'deki yazdırma komutu çalışıyor :D");
echo "<br/>";
$i=40;
printf("%d",$i);
echo "<br/>";
$bol=30/13;
printf("%f",$bol);
echo "<br/>";*/
$email="bu.rahan@hotmail.com";
if(preg_match('/^.+@.+\\..+$/',$email))
{
	echo "Mail doğru.";
}
else
{
	echo "Mail Yanlış!";
}
if(isset($_GET['Buton']))
{
	$email1=$_GET['mail'];
	if(preg_match('/^.+@.+\\..+$/',$email1))
	{
		echo "Buton Doğru";
	}
	else
	{
		echo "Buton Yanlış";
	}
}
/*REGULAR EXPRESSION(DÜZENLİ İFADELER) regex101.com
^[a-zA-Z0-9]+@[a-zA-Z0-9]+.[com]+$
^\t
^[a-z0-9]$ yazarsak sadece a yada 1 kabul edilir
bu.rahan@hotmail.com
*/
?>
<form method="get" action="">
<input type="text" name="mail" value=""/>
<input type="submit" name="buton" value="Doğrula"/>
</form>