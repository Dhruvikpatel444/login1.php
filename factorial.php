<?php
//print multiplication table
//check no is prime or not
//display fibonacci series upto limit - 0 1 1 2 3 5 8.....
$msg="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$no = $_POST["n1"];
		$fact = 1;
		for($i=1;$i <= $no ;$i++)
		{
			$fact = $fact * $i;
		}
		$msg = "Factorial is : $fact";
	}
?>
<html>
	<head>
		<title> Factorial </title>
	</head>
	<body>
		<h2> Calculate Factorial </h2>
		<hr/>
		<form method="POST">
			Enter NO : <input type="Text" name="n1">  <br/><br/>
			<input type="submit" value="Ahiya Dabavo !!">
			<h3> <span name="msg"> <?php echo $msg; ?> </span></h3>
		</form>	
	</body>
</html>