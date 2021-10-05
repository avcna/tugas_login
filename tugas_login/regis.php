<?php
include 'config.php';
session_start();

if (isset($_SESSION['username'])) {
  header("Location: login.php");
}

if (isset($_POST['but_regis'])) {
  $username = $_POST['username'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM login WHERE username ='$username'";
  $result= mysqli_query($koneksi, $sql);
  if (!$result-> num_rows > 0) {
    $sql = "INSERT INTO login (username, password)
            VALUES ('$username', '$password')";
    $result = mysqli_query($koneksi, $sql);

    $nama_mhs= $_POST['nama_mhs'];
    $fakultas= $_POST['fakultas'];
    $prodi=$_POST['prodi'];

    $sql_data="INSERT INTO data (nama, fakultas, prodi)
                                    VALUES ('$nama_mhs',
                                    '$fakultas',
                                    '$prodi')";
    $simpan= mysqli_query($koneksi, $sql_data);

    if ($result) {
      echo "<script> alert('Suskes Registrasi. Silahkan login untuk melanjutkan.') </script>";
    }
  }
  else {
    echo "<script> alert('username telah dipakai') </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registrasi</title>
  </head>
  <body>
    <div class="card mx-auto" style="width:30%;margin-top:2%;">
      <div class="card-header bg-primary text-white text-center">
        Registrasi
      </div>

      <div class="card-body">

        <form class="" action="" method="post">
          <div class="form-group">
          <label for="nama_mhs">Nama</label>
          <input id="nama_mhs" class="form-control"type="text" name="nama_mhs" placeholder="Masukan Nama" required>
          </div>
          <div class="form-group">
          <label for="fakultas">Fakultas</label>
          <input id="fakultas" class="form-control"type="text" name="fakultas" placeholder="Masukan Fakultas" required>
          </div>
          <div class="form-group">
          <label for="prodi">Prodi</label>
          <input id="prodi" class="form-control"type="text" name="prodi" placeholder="Masukan Prodi" required>
          </div>
          <div class="form-group">
          <label for="username">Username</label>
          <input id="username" class="form-control"type="text" name="username" placeholder="Masukan Username" required>
          </div>
          <div class="form-group">
          <label for="password">password</label>
          <input id="password" class="form-control"  type="password" name="password" placeholder="Masukan Password" required>
          </div>
          <button class="btn btn-success" type="submit" name="but_regis">Registrasi</button>
          <p>Sudah punya akun? <a href="login.php">Masuk disini</a></p>
        </form>


      </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
