<?php
$sorular = array("2x5=?","4x3=?","15/5=?","20+5=?","12-8=?","20*4=?","100-10=?","90/45=?","10^2=?","21/3=?");
$s1 = array("10","200","320","140");
shuffle($s1);
$s2 = array("12","132","144","135");
shuffle($s2);
$s3 = array("3","14","52","65");
shuffle($s3);
$s4 = array("25","80","100","15");
shuffle($s4);
$s5 = array("4","96","20","10");
shuffle($s5);
$s6 = array("80","24","16","6");                          // testte gelicek [rand] [shuffle] [array_splice]
shuffle($s6);
$s7 = array("90","110","10000","56");
shuffle($s7);
$s8 = array("2","897","45","1");
shuffle($s8);
$s9 = array("100","2","1000","65");
shuffle($s9);
$s10 = array("7","24","18","47");
shuffle($s10);
$sayilar = array("1","2","3","4","5","6","7","8","9","10");
shuffle($sorular);
for($i=0;$i<count($sorular);$i++)
{
	echo $sayilar[$i].") ".$sorular[$i]."<br/><br/>";
}
?>