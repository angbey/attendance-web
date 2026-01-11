<?php
session_start();

if (!isset($_SESSION['nik'])) {
    header("Location: login-dosen.php?login=gagal");
    exit;
}

$nik = $_SESSION['nik'];  
?>

<?php
  include_once('../config_table.php');
  $result = mysqli_query ($mysqli, "select * from absen_mahasiswa where kehadiran = 0 order by nim asc");
?>  

<!DOCTYPE html>
<html>
  <head>
    <title>
      Selamat Datang di Pengabsenan Online
    </title>
   <link rel="stylesheet" href="dosen-table-style.css">
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
            echo "<td> <b><a href='remove.php?nim=".$user_data['nim']."'>hapus</a></b> | ".$user_data['nim']."</td>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['prodi']."</td>";
            echo "<td>".$user_data['semester']."</td>";
            echo "<td>".$user_data['kelas']."</td>";
            echo "</tr>";
           }
          ?>
        </tr>
      </table>
      <div class='nav'>
      <a class='button-style' href='attend.php'>Tambah kehadiran</a>
      <a class='button-style' href='../exit.php'>Keluar</a>
      </div>
    </div>
  </body>
</html>