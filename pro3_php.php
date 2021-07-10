<?php
$min=$_GET['m'];
$max=$_GET['max'];


$no1=$min;
$no2=$min+1;
echo "$no1 , $no2 ,";

for($i=0;$i<=$max;$i++)
{
	$no3=$no1+$no2;
	echo " $no3 ,";
	$no1=$no2;
	$no2=$no3;
}
?>