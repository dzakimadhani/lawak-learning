<?php

$koneksi = mysqli_connect("localhost","root","","lawak-learning");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

session_start();

?>
