<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}


require 'functions.php';

if( isset($_POST["register"]) ) {

    if ( registrasi($_POST) > 0 ) {
        echo "<script>
            alert('user baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Halaman Registrasi</title>
    <style>
        label {
            display : block;
        }
    </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="blue darken-4">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><img src="img/PNG_CERINDO-removebg-preview.png"></a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="tambah.php">Tambah Data</a></li>
            <li><a href="registrasi.php">Tambah Admin</a></li>
            <li><a href="index.php">Lihat Data</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
      </div>
    </div>
    </nav>
  </div>
  
    <!-- sideNav -->

    <ul class="sidenav" id="mobile-nav">
        <li><a href="tambah.php">Tambah Data</a></li>
        <li><a href="registrasi.php">Tambah Admin</a></li>
        <li><a href="index.php">Lihat Data</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <div class="container">
    <div class="row">
    <h3 class="center light grey-text text-darken-4">Registrasi</h3>
        <hr style="width : 400px">
        <br><br>
    
<form action="" method="POST">

    <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>

        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>

        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <br>
        <li>
            <button class="waves-effect waves-light btn-small" type="submit" name="register">Register !</button>
        </li>
    </ul>
</form>
<br>
    </div>
    </div>
<footer class="blue darken-4 white-text center">
  <p>Copyright © 2020 Cerindo</p>
</footer>
</body>
</html>