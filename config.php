<?php
$host="localhost";
$user="DB_USER";
$pass="DB_PASS";
$db="db_tka2026";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){ die("Koneksi gagal"); }
?>
