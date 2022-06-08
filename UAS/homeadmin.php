<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Home | Admin</title>
</head>
<body style="background-image:url('https://img.freepik.com/free-photo/abstract-blue-extruded-voronoi-blocks-background-minimal-light-clean-corporate-wall-3d-geometric-surface-illustration-polygonal-elements-displacement_1217-2510.jpg?size=626&ext=jpg&ga=GA1.2.1445788865.1654314075');background-size:cover;background-repeat:initial;">

    <?php 
      session_start();

      //cek apakah yang sudah login dan levelnya admin
      if($_SESSION['level']!='admin' || empty ($_SESSION['login'])){
        header("location:login.php");
      }
    ?>
      <!-- Sidebar -->
    <div class="w3-sidebar w3-dark w3-bar-block" style="width:20%;padding:20px;background-color: rgb(19, 110, 155); color:white">
      <img src="admindash.png" style="width: 280px;" alt="">  
      <a href="homeadmin.php" class="w3-bar-item w3-button">Home</a>
      <a href="admin daftar guru.php" class="w3-bar-item w3-button">Daftar Guru</a>
      <a href="admin daftar jurusan.php" class="w3-bar-item w3-button">Daftar Jurusan</a>
      <a href="admin opsi jurusan.php" class="w3-bar-item w3-button">Daftar Mata Pelajaran</a>
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
    
    <!-- Page Content -->
    <div style="margin-left:20%">

    <div class="w3-container w3-white">
        <h1 style="text-align: center;font-family:Fira Sans;"><b>SISTEM INFORMASI SEKOLAH MENENGAH ATAS</b></h1>    
    </div>
    <div class="container" style="text-align:center;">
        <marquee behavior="scroll" direction="right" ><h1 style="font-family: Comic Sans;font-size:50px;color:beige">Selamat Datang Di Halaman Admin</h1></marquee>
        <p style="font-family: Brush Script MT;font-size:30px;color:beige;">Kini anda dapat melakukan pengeditan,peghapusan,<br>serta penambahan data jurusan,mapel,serta guru</p>
    <center><img src="admin.png" alt=""></center>
</div>
</body>
</html>