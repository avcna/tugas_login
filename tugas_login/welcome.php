<?php
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
    <title></title>
  </head>
  <body>
      <p>Welcome to the website!</p>
      <a href="logout.php">logout</a>
  </body>
</html>
