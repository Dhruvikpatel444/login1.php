<?php
	require_once("connection.php");
	$sql="select * from area";
	$result=mysqli_query($conn,$sql);
?>
<body>
	<table border="3">
		<tr>
			<th>Area Table <a href="insert1.php">Insert</a></th>
		</tr>
		<tr>
			<th>Area Id</th>
			<th>Area Name</th>
			<th>Action</th>
		</tr>
		<?php
			while($row=mysqli_fetch_array($result))
		{
			$aid=$row["area_id"];
		?>
		<tr>
			<td><?php echo $row['area_id']?></td>
			<td><?php echo $row['area_name'] ?></td>
			<td><a href="deletearea.php?id=<?php echo $aid; ?>">Delete</a></td>
		</tr
		<?php
		}
		?>	
	</table>
</body>