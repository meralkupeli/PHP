<?php
echo "1)2x5=? <br/>";
?>
<form method="GET" action="cevap.php">
<input type="radio" name="Bir" value="10">A-10
<br/>
<input type="radio" name="Bir" value="128">B-128
<br/>
<input type="radio" name="Bir" value="64">C-64
<br/>
<input type="radio" name="Bir" value="32">D-32
<br/><br/>
<?php
echo "2)10^3=? <br/>";
?>
<input type="radio" name="Iki" value="100">A-100
<br/>
<input type="radio" name="Iki" value="1000">B-1000
<br/>
<input type="radio" name="Iki" value="10">C-10
<br/>
<input type="radio" name="Iki" value="30">D-30
<br/><br/>
<?php
echo "3)2^5=? <br/>";
?>
<input type="radio" name="Uc" value="10">A-16
<br/>
<input type="radio" name="Uc" value="128">B-128
<br/>
<input type="radio" name="Uc" value="64">C-64
<br/>
<input type="radio" name="Uc" value="32">D-32
<br/><br/>
<?php
echo "4)25+15=? <br/>";
?>
<input type="radio" name="Dort" value="35">A-35
<br/>
<input type="radio" name="Dort" value="30">B-30
<br/>
<input type="radio" name="Dort" value="40">C-40
<br/>
<input type="radio" name="Dort" value="52">D-52
<br/><br/>
<?php
echo "5)100-70=? <br/>";
?>
<input type="radio" name="Bes" value="30">A-30
<br/>
<input type="radio" name="Bes" value="20">B-20
<br/>
<input type="radio" name="Bes" value="50">C-50
<br/>
<input type="radio" name="Bes" value="40">D-40
<br/><br/>
<input type="submit" name="result" value="Testi Bitir">
<br/>
</form>
<?php
echo "Doğru Sayısı: <br/>";
echo "Yanlış Sayısı: <br/>";
echo "Başarı:(%) <br/>";
?>