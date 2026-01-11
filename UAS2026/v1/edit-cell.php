<?php
  session_start();
  include('config_table.php');
  $nim = $_SESSION['nim'];

  $result = mysqli_query($mysqli, "SELECT * FROM absen_mahasiswa WHERE nim = '$nim'");
  $data  = mysqli_fetch_assoc($result);

  $nama = $data['nama'];
  $prodi = $data['prodi'];
  $semester = $data['semester'];
  $kelas = $data['kelas'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tampilan Data</title>
    <link rel="stylesheet" href="edit-cell-style.css">  
  </head>
  <body>
    <div id="main">
      <h1>Data Mahasiswa</h1>
      <p><b>NIM (Nomor Induk Mahasiswa)</b></p>
      <p>
        <?php 
          echo "$nim";
        ?>
      </p>

      <p><b>Nama</b></p>
      <p>
        <?php
          echo "$nama";
        ?>
      </p>

      <p><b>Prodi (Program Studi)</b></p>
      <p><?php echo "$prodi";?></p>

      <p><b>Semester & kelas</b></p>  
      <p><?php echo "$semester   -   ";  echo "$kelas";?></p>

      <a class="button-style" href="table.php">Kembali</a>
      <a class="button-style" href="edit-process.php">Edit</a>
    </div>
  </body>
</html>