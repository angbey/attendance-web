<?php
  session_start();
  include('../config_table.php');

  $nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tampilan Data</title>
    <link rel="stylesheet" href="guest-info-style.css">  
  </head>
  <body>
    <div id="main">
      <h1>Data Mahasiswa</h1>
      <p><b>NIM (Nomor Induk Mahasiswa)</b></p>
      <p>
        <?php 
          echo "<span>///</span>";
        ?>
      </p>

      <p><b>Nama</b></p>
      <p>
        <?php
          echo "<span class='data'>$nama</span>";
        ?>
      </p>

      <p><b>Prodi (Program Studi)</b></p>
      <p><?php echo "<span>///</span>";?></p>

      <p><b>Semester & kelas</b></p>  
      <p><?php echo "<span>///    - </span>";  echo "<span>/// </span>";?></p>

      <button class="inactive-button-style">Edit</button><br>
      <br><a class="button-style2" href="guest-table.php">Kembali</a>
    </div>
  </body>
</html>