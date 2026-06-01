<?php
include 'config.php';
$nisn=$_GET['nisn'] ?? '';
$stmt=mysqli_prepare($conn,"SELECT * FROM siswa WHERE nisn=?");
mysqli_stmt_bind_param($stmt,"s",$nisn);
mysqli_stmt_execute($stmt);
$result=mysqli_stmt_get_result($stmt);
header('Content-Type: application/json');
echo json_encode(mysqli_fetch_assoc($result));
?>
