<?php
  session_start();
  include_once('config_table.php');

  $nim = $_SESSION['nim'];
  mysqli_query($mysqli, "update absen_mahasiswa set kehadiran = 0 where nim = '$nim'" );
  header("location: table.php");
  exit;
?>