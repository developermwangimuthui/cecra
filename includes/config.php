<?php
$servername = "db5001077688.hosting-data.io";
$database = "dbs926866";
$username = "dbu1345190";
$password = "4r$gYTXbG#8_TqT";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
