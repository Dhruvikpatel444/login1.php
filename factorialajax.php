<?php
	$no = $_GET['no'];
	$fact = 1;
	for($i=1;$i<=$no;$i++)
	{
		$fact = $fact * $i;
	}
	echo "Factorial is : $fact";
?>