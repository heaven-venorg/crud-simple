<?php 
	include_once 'connection.php';
	$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id ASC")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Indexing</title>
</head>
<body>
	<h1>Tableling</h1>
	<a href="add.php">Add</a>
	<table width="75%" border="1px">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($out = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$out['nama']."</td>";
					echo "<td>".$out['email']."</td>";
					echo "<td><a href='edit.php?id=$out[id]'>Edit</a> | <a href='delete.php?id=$out[id]'>Delete</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>