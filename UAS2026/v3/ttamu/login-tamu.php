<!DOCTYPE html>
<html>
  <head>
    <title>Tampilan Log In</title>
    <link rel="stylesheet" href="login-tamu-style.css">
  </head>
  <body>
    <div id="main">
      <form method="POST" action="login-tamu.php" name="login-form">
        <h1>SILAHKAN MASUK</h1>
        <p>Masukkan nama anda.</p><br>
        <input class="input-style" type="text" name="nama">
        <br>
        <button class="button-style">Masuk</button><br>


        <?php
          session_start();
          include('../config_table.php');

          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama']; 

            $sql = "INSERT INTO daftar_tamu (nama) VALUES ('$nama')";
            $result = mysqli_query($mysqli, $sql);

            $_SESSION['nama'] = $nama;
            header("location: guest-table.php");
            exit();
          }
        ?>

      </form>
      <br><a class="button-style2" href="../peran/peran.html">Kembali</a><br><br>
    </div>
  </body>
</html>