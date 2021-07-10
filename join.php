<?php
	require_once("connection.php");
	$sql="select * from user u join area a where u.area_id=a.area_id";
	$result=mysqli_query($conn,$sql);
?>
<body>
	<table border="3">
		<tr>
			<th>User_ID</th>
			<th>User_name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Area Name</th>
			<th>Action</th>
		</tr>
		<?php
		while($row=mysqli_fetch_array($result))
		{
			$uid=$row["user_id"];
			$area=$row["area_name"];
		?>
		<tr>
			<td><?php echo $row['user_id'] ?></td>
			<td><?php echo $row['user_name'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['password'] ?></td>
			<td><?php echo $row['area_name'] ?></td>
			<td><a href="deleteuser.php?id=<?php echo $uid; ?>">Delete</a>&nbsp;
				<a href="update.php?id=<?php echo $uid?>&area=<?php echo $area;?>">Update</a></td>

		</tr>
		<?php
		}
		?>	
	</table>
</body>
