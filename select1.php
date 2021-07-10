<?php
	require_once("connection.php");
	$sql="select * from user";
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
		</tr>
		<?php
			while($row=mysqli_fetch_array($result))
		{
		?>
		<tr>
			<td><?php echo $row['user_id'] ?></td>
			<td><?php echo $row['user_name'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['password'] ?></td>
			<td><?php echo $row['area_id'] ?></td>
		</tr
		<?php
		}
		?>	
	</table>
</body>