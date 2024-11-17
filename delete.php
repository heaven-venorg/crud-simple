<?php 
	include_once 'connection.php';
	$id = $_GET['id'];
	$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");
	header("location: index.php");
 ?>