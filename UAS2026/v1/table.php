<?php
session_start();

if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}

$nim = $_SESSION['nim'];  
?>

<?php
  include_once('config_table.php');
  $result = mysqli_query ($mysqli, "select * from absen_mahasiswa where kehadiran = 0 order by nim asc");
?>  

<!DOCTYPE html>
<html>
  <head>
    <title>
      Selamat Datang di Pengabsenan Online
    </title>
   <link rel="stylesheet" href="table-style.css">
  </head>
  <body>
    <div id="main">
      <?php
        echo "<span id='greeting'>Selamat datang, ".$_SESSION['nama'].".</span><br><br>";
      ?>
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
            echo "<td>".$user_data['nim']."</td>";
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
      <a class='button-style' href='add-cell.php'>Isi kehadiran</a>
      <a class='button-style' href='del-cell.php'>Hapus Kehadiran</a>
      <a class='button-style' href='edit-cell.php'>Ubah Info Kehadiran</a>
      <a class='button-style' href='exit.php'>Keluar</a>
      </div>
    </div>
  </body>
</html>