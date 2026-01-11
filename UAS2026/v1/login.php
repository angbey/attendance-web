<!DOCTYPE html>
<html>
  <head>
    <title>Tampilan Log In</title>
    <link rel="stylesheet" href="login-style.css">
  </head>
  <body>
    <div id="main">
      <form method="POST" action="login.php" name="login-form">
        <h1>SILAHKAN LOG IN</h1>
        <p>NIM (Nomor Induk Mahasiswa)</p><br>
        <input class="input-style" type="text" name="nim">
        <br><br><br>
        <p>Nama</p><br>
        <input class="input-style" type="text" name="nama">
        <br><br><br>
        <p>Password</p><br>
        <input class="input-style" type="text" name="pass"><br>
        <button class="button-style">Masuk</button><br><br><br>

        <?php
          session_start();
          include('config_table.php');

          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nim = $_POST['nim'];
            $pass = $_POST['pass'];
            $nama = $_POST['nama']; 

            $sql = "SELECT * FROM absen_mahasiswa where nim = '$nim' and nama = '$nama' and password = '$pass'";
            $result = mysqli_query($mysqli, $sql);

            if (mysqli_num_rows($result) === 1) {
              $_SESSION['nama'] = $nama;
              $_SESSION['nim'] = $nim;
              header("location: table.php");
              exit();

            } else {
                header("location: login.php?login=gagal");
              }
          }
        ?>

        <?php
          if(isset($_GET['login'])) {
            echo "NIM/Password anda salah..";
          }
        ?>

      </form>
    </div>
  </body>
</html>