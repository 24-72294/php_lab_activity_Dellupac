<?php
$Hostname = "localhost";
$Username = "root";
$Password = "";
$dbname = "delldb";

$conn = new mysqli($Hostname,$Username,$Password,$dbname);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
};
// echo "Connected Succesfully";






?>