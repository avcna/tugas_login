<?php
include 'config.php';

session_start();

// error_reporting(0);

if (isset($_SESSION['username'])) {
  header("Location: welcome.php");
}

if (isset($_POST['but_login'])) {
  $username = $_POST['username'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $sql);

  if ($result->num_rows > 0) {
    $tampil = mysqli_fetch_assoc($result);
    $_SESSION['username']= $tampil['username'];
    header("Location: welcome.php");
  }
  else {
    echo "<script> alert('Username atau Password Anda salah.') </script>";
  }
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
    <div class="card mx-auto" style="width:30%;margin-top:2%;">
      <div class="card-header bg-primary text-white text-center">
        Login
      </div>
      <div class="card-body">
        <form class="" action="" method="post">
          <div class="form-group">
          <label for="username">Username</label>
          <input id="username" class="form-control"type="text" name="username" placeholder="Masukan Username" required>
          </div>
          <div class="form-group">
          <label for="password">password</label>
          <input id="password" class="form-control"  type="password" name="password" placeholder="Masukan Password" required>
          </div>
          <button class="btn btn-success" type="submit" name="but_login">login</button>
          <p>Tidak punya akun? <a href="regis.php">Registrasi disini</a></p>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
