<?php
	$n = $_GET['tab'];
	$i = 0;
	for($i=1;$i<=10;$i++)
	{
		$res = $i * $n;
		echo "$n * $i = $res <br/>";
	}
?>