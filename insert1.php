<?php
	require_once("connection.php");
?>
<body>
	<form method="POST" name="area">
		<h3> insert Area </h3>
		Enter AreaName : <input type="text" name="areaname">
		<br><br>
		<input type="submit" name="submit">
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(isset($_POST["areaname"]))
			{
				$name=$_POST["areaname"];
				
				if($name!='')
				{
					$sql="insert into area(area_name) values('".$name."')";
					$result=mysqli_query($conn,$sql);

					if($result)
					{
						header("Location:areaselect.php");
					}
					else
					{
							echo "check result";
					}
				}
			}
			else
			{
				echo "No Value";
			}
		}
	?>
</body>