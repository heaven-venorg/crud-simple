<?php
	include_once 'connection.php';
	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$result = mysqli_query($conn, "UPDATE users SET nama='$nama', email='$email' WHERE id=$id");
		header("location: index.php");
	}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
while($out = mysqli_fetch_array($result))
{
	$nama = $out['nama'];
	$email = $out['email'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>
	<form name="update_user" action="edit.php" method="post">
		<label for="nama">Nama</label></br>
		<input type="text" name="nama" value="<?php echo $nama ?>"></br>
		<label for="email">Email</label></br>
		<input type="text" name="email" value="<?php echo $email ?>"></br>
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></br>
		<input type="submit" name="update" value="Update">
	</form>
</body>
</html>