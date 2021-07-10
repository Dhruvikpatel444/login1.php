<?php
	define("db_host","localhost");
	define("db_username","root");
	define("db_password","");
	define("db_name","demo");

	$conn=mysqli_connect(db_host,db_username,db_password,db_name);
	if(!$conn)
	{
		echo"error in connection";
	}
	else
	{
		echo"connection is successfull";
	}
?>