<?php

//$server = "127.0.0.1"; // setingan di pc
$server = "127.0.0.1:3366"; // setingan di laptop
$username = "root";
$password = "";
$database = "fp_gopets";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
	echo "Failed to connect ".mysqli_connect_error();
	exit();
}

?>