<?php
  session_start();
  include_once('config_table.php');
  $nim = $_SESSION['nim'];

  $result = mysqli_query($mysqli, "SELECT * FROM absen_mahasiswa WHERE nim='$nim'");
  $data = mysqli_fetch_assoc($result);

  $nama = $_SESSION['nama'] ?? $data['nama'];
  $semester = $_SESSION['semester'] ?? $data['semester'];
  $kelas = $_SESSION['kelas'] ?? $data['kelas'];

 mysqli_query($mysqli, "UPDATE absen_mahasiswa SET nama='$nama', semester='$semester', kelas='$kelas' WHERE nim='$nim'");
  header('Location: edit-cell.php');
  exit();
?>