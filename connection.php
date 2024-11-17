<?php 
	// include Vendor
	include_once 'vendor/autoload.php';
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();
	// Initiaized DB
	$host = $_ENV['HOST'];
	$user = $_ENV['USER'];
	$pass = $_ENV['PASS'];
	$db = $_ENV['DB'];
	// Connection
	$conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_errno)
	{
    	echo "Connect failed: ". $mysqli->connect_error;
	}
?>