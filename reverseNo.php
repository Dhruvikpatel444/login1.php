<?php
	$msg="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$no = $_POST["n1"];
		$rev = 0;
		while($no>0)
		{
			$rem = $no % 10;
			$no = (int)($no / 10);
			$rev = $rev * 10 + $rem;
		}
		$msg = "Reverse no is : $rev";
	}
?>
<html>
	<head>
		<title> Reverse NO </title>
	</head>
	<body>
		<h2> Find Reverse No </h2>
		<hr/>
		<form method="POST">
			Enter NO : <input type="Text" name="n1">  <br/><br/>
			<input type="submit" value="Ahiya Dabavo !!">
			<h3> <span name="msg"> <?php echo $msg; ?> </span></h3>
		</form>	
	</body>
</html>