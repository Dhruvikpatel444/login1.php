<?php
	require_once("connection.php");
	$sql="select * from area";
	$result=mysqli_query($conn,$sql);
?>
<body>
		<form method="POST" name="user">
			<h3> insert User Detail </h3>
			Enter Username : <input type="text" name="username">
			<br><br>
			Enter password : <input type="password" name="pswrd">
			<br><br>
			Enter Email : <input type="email" name="email">
			<br><br>
			Select area :
			<select name="textarea">
			<?php
				while($row=mysqli_fetch_array($result))
				{
			?>
				<option value="<?php echo $row['area_id']; ?>">
						       <?php echo $row['area_name']; ?></option>
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
				if(isset($_POST["username"]) && $_POST["pswrd"] && isset($_POST["email"]) && isset($_POST["textarea"]))
				{
					$name=$_POST["username"];
					$password=$_POST["pswrd"];
					$email=$_POST["email"];
					$area=$_POST["textarea"];

					if($name!='' && $area!='' && $email!='' && $password)
					{
						$sql="insert into user(user_name,password,email,area_id)
							  values('".$name."','".$password."','".$email."','".$area."')";
						$result=mysqli_query($conn,$sql);

						if($result)
						{
							header("Location:join.php");
						}
						else
						{
							echo "check your result";
						}
					}
				}
				else
				{
					echo "value not set";
				}
			}
		?>
	</body>