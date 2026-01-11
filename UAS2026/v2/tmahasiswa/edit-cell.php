<?php
  session_start();
  include('../config_table.php');
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
      <Form method="POST" action="edit-cell.php">
      <p>
        <?php 
          echo "<span class='data'>$nim</span>";
        ?>
      </p>

      <p><b>Nama</b></p>
      <p>
        <?php
          echo "<span class='data'>$nama</span>";
        ?>
      </p>

      <p><b>Prodi (Program Studi)</b></p>
      <p><?php echo "<span class='data'>$prodi</span>";?></p>

      <p><b>Semester & kelas</b></p>  
      <p><?php echo "<span class='data'>$semester   -   </span>";  echo "<span class='data'>$kelas</span>";?></p>

      <button class="button-style">Edit</button>
      </Form>
      <br><a class="button-style2" href="mahasiswa-table.php">Kembali</a>
    </div>
  </body>
</html>

<?php
  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $_SESSION['nama'] = $nama;
    $_SESSION['semester'] = $semester;
    $_SESSION['kelas'] = $kelas;

    header('location: edit-process.php');
    exit();
  }
?>