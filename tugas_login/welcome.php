<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
      <p>Data Mahasiswa</p>
      <div class="card mx-auto" style="width:70%;margin-top:5%;">
        <div class="card-header bg-success text-white text-center">
          DATA MAHASISWA
        </div>
      <div class="card-body">
      <table class="table table-borderd table-striped">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Fakultas</th>
          <th>Prodi</th>
        </tr>
        <?php
$no=1;
        $tampil= mysqli_query($koneksi, "SELECT * FROM data");
          while ($data = mysqli_fetch_array($tampil)) :

         ?>
        <tr>
          <td><?=$no++;?></td>
          <td><?=$data['nama']?></td>
          <td><?=$data['fakultas']?></td>
          <td><?=$data['prodi']?></td>
          <td>

          </td>
        </tr>
      <?php endwhile; ?>
      </table>
      <br>
      <br>
      <a href="logout.php">
      <button class="btn btn-danger" type="submit" name="but_logout">Logout</button>
      </a>
    </div>
    </div>

  </body>
</html>
