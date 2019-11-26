<?php
require_once('koneksi.php');
session_start();
$session = $_SESSION['user'];
unset($session);
session_destroy();
header('Location: login.php');

 ?>
