<?php
$msg="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a = $_POST['n1'];
		if($a % 2 == 0)
		{
			$msg = "No is Even";
		}
		else
		{
			$msg = "No is Odd";
		}
	}
?>
<html>
	<head>
		<title> Even - Odd Number </title>
	</head>
	<body>
		<h2> Check No of Even or Odd </h2>
		<form method="POST">
				Enter NO : <input type="Text" name="n1">  <br/>
				<input type="submit" name="Ahiya Dabavo !!">
				<h3> <span name="msg"> <?php echo $msg; ?> </span></h3>
		</form>	
	</body>
</html>