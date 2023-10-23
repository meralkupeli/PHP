<form method="get" action="sonuc.php">
<input type="radio" name="testRadio" value="1">A
<input type="radio" name="testRadio" value="2">B
<input type="radio" name="testRadio" value="3">C
</br>
<input type="submit" name="POST" value="Gönder">
</br>
</form>
<form method="POST" action="sonuc.php">
<input type="text" name="field" value="">
</br>
<input type="text" name="field1" value="">
</br>
<input type="radio" name="buton" value="toplama">+
<input type="radio" name="buton" value="cikarma">-
<input type="radio" name="buton" value="carpma">*
<input type="radio" name="buton" value="bolme">/
<input type="submit" name="POST" value="Hesapla">
</br>
</form>
<?php
//r,w,a 'içine'
//dosya yazma kısmı                $line=fwrite($fh_write,"asd\r\n"); --> yeni satıra değer yazma   
/*
$fh=fopen("testFile.txt",'a') or die("Hata!");
$text="aaaaa ";
fwrite($fh,$text);
fclose($fh);
echo "Dosya Oluşturuldu.";*/
//dosya okuma kısmı
/*$fh_read = fopen("testFile.txt",'r') or die("Hata!");
//$line=fgets($fh_read);
$line=fread($fh_read,11);
fclose($fh_read);
echo $line;
echo "</br>";*/
/*if(isset($_GET['gonder']))
{
	$fh=fopen("testFile.txt",'a') or die("Hata!");
	$yaz=$_GET['deger'];
	fwrite($fh,$yaz);
	fclose($fh);
	echo "Başarılı";
	echo "</br>";
}*/
$fh_read = fopen("testFile.txt",'r') or die("Hata!");
$line=fread($fh_read,filesize('testFile.txt'));
fclose($fh_read);
echo $line;
echo "</br>";
$dizi = explode(",",$line);
$top=0;
for($i=0;$i<count($dizi);$i++)
{
	$top += $dizi[$i];
	$avg = $top/5;
	echo "Ortalama= ".$avg;
	echo "</br>";
	echo "Toplam: ".$top;
	echo "</br>";
}
?>
<form method="get" action="">
<input type="text" name="deger" value="">
</br>
<input type="submit" name="gonder" value="Yazdır">
</form>