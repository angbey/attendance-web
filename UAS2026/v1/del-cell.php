<?php 
session_start();
include_once("config_table.php");
$nim = $_SESSION['nim'];

mysqli_query($mysqli, "UPDATE absen_mahasiswa SET kehadiran = 1 WHERE nim='$nim'");
header("Location: table.php");
exit;
?>
