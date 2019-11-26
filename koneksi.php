<?php

$koneksi = 
mysqli_connect("localhost","tikakusn_lawak","0hCyl]TmO}$}","tikakusn_lawak-learning");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

session_start();

?>
