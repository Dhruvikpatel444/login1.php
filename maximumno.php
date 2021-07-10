<?php
$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$a = $_POST["n1"];
	$b = $_POST["n2"];
	$c = $_POST["n3"];
	if($a > $b && $a > $c)
	{
		$msg = "$a is greater";
	}
	else if($b > $c)
	{
		$msg = "$b is greater";
	}
	else
	{
		$msg = "$c is greater";
	}
}
?>
<html>
	<head>
		<title> Maximum Number </title>
	</head>
	<body>
		<form method="POST">
			<h3> find Maximum number </h3>
			Enter No1 : <input type="text" name="n1">
			<br><br>
			Enter No2 : <input type="text" name="n2">
			<br><br>
			Enter No3 : <input type="text" name="n3">
			<br><br>
			<input type="submit" name="click here !!">
			<h3> <span name="msg"> <?php echo $msg; ?> </span></h3>