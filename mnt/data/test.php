<?php
$servername = 'mysql';
$username = 'test_connection';
$password = '5hyujawa.';

// Create connection
$conn = new mysqli($servername, $username, $password);
//
// // Check connection
if ($conn) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully";
}
?>
