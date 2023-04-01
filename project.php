<?php
require "functions.php";

$mahasiswa = query("SELECT *FROM project ORDER BY id DESC");

//tombol cari ditekan
if(isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- my CSS -->

    <link rel="stylesheet" href="css/style.css"> 
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Project</title>
</head>
<body>
<!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="blue darken-4">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo"><img src="img/Logo/PNG_CERINDO-removebg-preview.png"></a>
      </div>
    </div>
    </nav>
  </div>

<!-- Daftar Foto Project -->
<section id="service" class="service scrollspy">
    <div class="container">
        <div class="row">
          <div class="t">
            <h3 class="center light grey-text text-darken-4">Daftar Project
            <hr></h3><br>
          </div>

<br><br>        
<?php foreach ($mahasiswa as $row) : ?>  
          <div class="row">
          
          <div class="a1 col m5 s12">
            <div class="s">
              <img src="php/img/<?php echo $row["gambar"];?>" alt="">  
            </div>
          </div>

          <div class="col m7 s12">
              <h5><?php echo $row["nama_project"];?></h5><hr>
              <p><?php echo $row["keterangan"];?></p>
          </div>

        </div><br><hr><br>
<?php endforeach ; ?>     
    
      </div>
    </div>
</section>

<!-- Akhir Daftar -->

<!-- footer -->
<footer class="footer white-text center">
  <p>Copyright © 2020 Cerindo</p>
</footer>
<!-- akhir footer -->

</body>
</html>