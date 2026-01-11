<?php
  session_start();
  include('../config_table.php');

  $nama = $_SESSION['nama'];

  session_destroy();
  mysqli_query ($mysqli, "DELETE FROM daftar_tamu where nama = '$nama'");
  header('location: ../peran/peran.html');
  exit();
?>