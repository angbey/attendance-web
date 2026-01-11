<?php
session_start();
include_once('../config_table.php');

if (!isset($_SESSION['nim'])) {
    header("Location: login-mahasiswa.php?login=gagal");
    exit;
} 
$nim = $_SESSION['nim'];
$result = mysqli_query ($mysqli, "select * from absen_mahasiswa where kehadiran = 0 order by nim asc");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Selamat Datang di Pengabsenan Online
    </title>
   <link rel="stylesheet" href="mahasiswa-table-style.css">
  </head>
  <body>
    <div id="main">
      <?php
        echo "<span id='greeting'>Selamat datang, <b>".$_SESSION['nama']."</b>.</span><br><br>";
      ?>
      <img src="plant3.png">
      <table>
        <tr>
          <th colspan="5">
            Daftar Absen
          </th>
        </tr>
        <tr>
          <th>NIM</th>
          <th>Nama Mahasiswa</th>
          <th>Program Studi</th>
          <th>Semester</th>
          <th>Kelas</th>
        </tr>
        <tr>
          <?php
           while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            if ($nim === $user_data['nim']) {
              echo "<td><b>".$user_data['nim']."</b></td>";
            }
            else {
              echo "<td>".$user_data['nim']."</td>";
            }

           if ($nim === $user_data['nim']) {
              echo "<td><b>".$user_data['nama']."</b></td>";
            }
            else {
              echo "<td>".$user_data['nama']."</td>";
            }
            

           if ($nim === $user_data['nim']) {
              echo "<td><b>".$user_data['prodi']."</b></td>";
            }
            else {
              echo "<td>".$user_data['prodi']."</td>";
            }         

           if ($nim === $user_data['nim']) {
              echo "<td><b>".$user_data['semester']."</b></td>";
            }
            else {
              echo "<td>".$user_data['semester']."</td>";
            }

           if ($nim === $user_data['nim']) {
              echo "<td><b>".$user_data['kelas']."</b></td>";
            }
            else {
              echo "<td>".$user_data['kelas']."</td>";
            }     
            echo "</tr>";
           }
          ?>
        </tr>
      </table>
      <div class='nav'>
      <a class='button-style' href='add-cell.php'>Isi kehadiran</a>
      <a class='button-style' href='del-cell.php'>Hapus Kehadiran</a>
      <a class='button-style' href='edit-cell.php'>Ubah Info Kehadiran</a>
      <a class='button-style' href='../exit.php'>Keluar</a>
      </div>
    </div>
  </body>
</html>