<?php
  session_start();
  include('config_table.php');
  $nim = $_SESSION['nim'];

  $result = mysqli_query($mysqli, "SELECT * FROM absen_mahasiswa WHERE nim = '$nim'");
  $data  = mysqli_fetch_assoc($result);

  $prodi = $data['prodi'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Perubahan Data</title>
    <link rel="stylesheet" href="edit-cell-style.css">  
  </head>
  <body>
    <div id="main">
      <form method="POST">
        <h1>Data Mahasiswa</h1>
        <p><b>NIM (Nomor Induk Mahasiswa)</b></p>
        <p>
          <?php 
            echo "$nim";
          ?>
        </p>

        <p><b>Nama</b></p>
        <input type="text" name="nama">

        <p><b>Prodi (Program Studi)</b></p>
        <p><?php echo "$prodi";?></p>

        <p><b>Semester & kelas</b></p>  
        <input type="text" name="sem" placeholder="semester">
        <input type="text" name="kelas" placeholder="kelas">

        <button class="button-style" href="table.php">Kembali</button>
        <button type="submit" class="button-style">Submit</button>
      </form>
    </div>
  </body>
</html>

<?php
  if($_SERVER['REQUEST_METHOD'] === "POST") {
    $nama = $_POST['nama'];
    $semester = $_POST['sem'];
    $kelas = $_POST['kelas'];

    $sql = mysqli_query ($mysqli, "Select * from absen_mahasiswa where nim = '$nim'");
    $_SESSION['nama'] = $nama;
    $_SESSION['semester'] = $semester;
    $_SESSION['kelas'] = $kelas;

    header('Location: data-edit-processing.php');
    exit();
  }
?>