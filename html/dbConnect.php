<?php

$servername = "iHealthy.16mb.com"

$username = "u207738006_root";

$password = "123456";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
