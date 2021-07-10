<?php
$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$a = $_POST["n1"];
	$b = $_POST["n2"];
	$op = $_POST["op"];

	switch($op)
	{
		case 1 : $c = $a + $b;
			     $msg = "Addition is : $c";
			     break;
		case 2 : $c = $a - $b;
			     $msg = "Substraction is : $c";
			     break;
		case 3 : $c = $a * $b;
			     $msg = "Multiplication is : $c";
			     break;
		case 4 : $c = $a / $b;
			     $msg = "Division is : $c";
			     break;
	}
}
?>
<html>
	<head>
		<title> Switch Demo </title>
	</head>
	<body>
		<form method="POST">
			<h3> Arithmetic Operations </h3>
			Enter No1 : <input type="text" name="n1">
			<br><br>
			Enter No2 : <input type="text" name="n2">
			<br><br>
			Select Option
			<select name="op">
				<option value="1">ADD</option>
				<option value="2">SUB</option>
				<option value="3">MUL</option>
				<option value="4">DIV</option>
			</select>
			<br><br>
			<input type="submit" name="Aa Datti Dabavo !!">
			<h3> <span name="msg"> <?php echo $msg; ?> </span></h3>

		</form>
	</body>
</html>