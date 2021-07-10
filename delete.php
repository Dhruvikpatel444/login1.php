<?php
    $con = mysqli_connect("localhost","root","","student");
	$id = $_GET['id'];
	$del = mysqli_query($con,"DELETE FROM `register` WHERE id=$id");
	if($del)
	{
		echo "<script>window.location.href='admin.php'</script>";
	}
	else
	{
		echo "FAIL";
	}
?>