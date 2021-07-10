<?php
    $con = mysqli_connect("localhost","root","","student");
	$id = $_GET['id'];
	
	$del = mysqli_query($con,"UPDATE `register` SET `status`='1' WHERE id=$id");
	if($del)
	{
		echo "<script>window.location.href='admin.php'</script>";
	}
	else
	{
		echo "FAIL";
	}
?>