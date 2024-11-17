<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add</title>
</head>
<body>
	<form method="POST">
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama">
		<label for="email">Email</label>
		<input type="email" name="email" id="email">
		<input type="submit" name="submit" value="kirim">
	</form>
	<?php 
	if(isset($_POST['submit']))
	{
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$result = mysqli_query($conn, "INSERT INTO users(nama, email) VALUES('$nama', '$email')");
		echo "Penambahan Berhasil <a href='index.php'>Lihat</a>" ;
	}
	?>
</body>
</html>