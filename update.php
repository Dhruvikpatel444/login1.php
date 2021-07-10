<?php
	require_once("connection.php");
	if(isset($_GET['id']) && isset($_GET['area']))
	{
		$id = $_GET['id'];
		$area = $_GET['area'];
		$sql = "select * from user where user_id = '".$id."'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
	}
?>
<body>
		<form method="POST" name="user">
			<h3> Update User Detail </h3>
			Enter Username : <input type="text" name="username" value='<?php echo $row['user_name']?>'>
			<br><br>
			Enter password : <input type="password" name="pswrd" value='<?php echo $row['password']?>'>
			<br><br>
			Enter Email : <input type="email" name="email" value='<?php echo $row['email']?>'>
			<br><br>
			Select area :
			<select name="textarea">
			<?php
				$sql1 = "select * from area";
				$result1 = mysqli_query($conn,$sql1);
				while($row1=mysqli_fetch_array($result1))
				{
			?>
				<option value="<?php echo $row1['area_id']; ?>" <?php if($row1['area_name']==$area)
				{echo 'selected';}?>>
						       <?php echo $row1['area_name']; ?></option>
			<?php
				}
			?>
			</select>
			<br><br>
			<input type="submit" name="submit">
		</form>
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(isset($_POST["username"]) && isset($_POST["pswrd"]) && isset($_POST["email"]) && isset($_POST["textarea"]))
				{
					$name=$_POST["username"];
					$pswd=$_POST["pswrd"];
					$email=$_POST["email"];
					$area=$_POST["textarea"];

					if($name!='' && $pswd!='' && $email!='' && $area!='')
					{
						$sql="update user set user_name='".$name."',password='".$pswd."',email='".$email."',area_id='".$area."' where user_id = '".$id."'";
						//echo $sql;
						//die;
						$result=mysqli_query($conn,$sql);
						if($result)
						{
							header("Location:join.php");
						}
					}
					else
					{
						echo "VALUE IS NULL";
					}
				}
				else
				{
					echo "value not set";
				}
			}
		?>
</body>