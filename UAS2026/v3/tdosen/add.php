<?php 
include_once("../config_table.php");
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
}
mysqli_query($mysqli, "UPDATE absen_mahasiswa SET kehadiran = 0 WHERE nim='$nim'");
header("Location: dosen-table.php");
exit;
?>