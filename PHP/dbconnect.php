<?php
    require('config.php');
    $mysqli = new mysqli($hostname, $username, $password, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	else{
		echo "Connection checked";
	}
?>