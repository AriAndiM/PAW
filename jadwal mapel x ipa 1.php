<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Jadwal 10 IPA 1</title>
</head>
<body bgcolor="#E45826" >
      <!-- Sidebar -->
      <div class="w3-sidebar w3-dark-grey w3-bar-block" style="width:20%;padding-top:80px;">
      <a href="home.php" class="w3-bar-item w3-button">Home</a>
      <a href="opsi kelas siswa .php" class="w3-bar-item w3-button">Data Kelas</a>
      <a href="opsi kelas jadwal.php" class="w3-bar-item w3-button">Jadwal Mapel</a>
      <a href="opsi jurusan.php" class="w3-bar-item w3-button">Mata Pelajaran</a>
      <a href="login.php" class="w3-bar-item w3-button">Logout</a>
    </div>

    <!-- Page Content -->
    <div style="margin-left:20% ">

    <div class="w3-container" style="text-align: center;">
    <h1 style="text-align: center;font-family:Fira Sans;color:#E6D5B8;"><b>Daftar Jadwal Mapel Kelas X IPA 1</b></h1>
    <button style="background-color: #008CBA;border-radius:5px;"><a href="form tambah jadwal mapel.php" style="text-decoration:none;">Tambah </a></button>

    <div style="font-size:smaller;padding-top:20px;">
        <table class="w3-table-all">
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">Hari</th>
                <th style="text-align: center;">Mapel 1</th>
                <th style="text-align: center;">Waktu 1</th>
                <th style="text-align: center;">Pengajar Mapel 1</th>
                <th style="text-align: center;">Mapel 2</th>
                <th style="text-align: center;">Waktu 2</th>
                <th style="text-align: center;">Pengajar Mapel 2</th>
                <th style="text-align: center;">Mapel 3</th>
                <th style="text-align: center;">Waktu 3</th>
                <th style="text-align: center;">Pengajar Mapel 3</th>
                <th style="text-align: center;">Action</th>
            </tr>
            <?php 
            include "koneksi.php";

            $query="SELECT*FROM jadwal2";
            $hasil=mysqli_query($conn,$query);
            
            while ($row=mysqli_fetch_array($hasil))
            {
            ?>    

            <tr>
                <td style="text-align: center;"><?php echo $row['ID'] ?></td>
                <td style="text-align: center;"><?php echo $row['Hari'] ?></td>
                <td style="text-align: center;"><?php echo $row['Mapel1'] ?></td>
                <td style="text-align: center;"><?php echo $row['Waktu1'] ?></td>
                <td style="text-align: center;"><?php echo $row['Pengajar1'] ?></td>
                <td style="text-align: center;"><?php echo $row['Mapel2'] ?></td>
                <td style="text-align: center;"><?php echo $row['Waktu2'] ?></td>
                <td style="text-align: center;"><?php echo $row['Pengajar2'] ?></td>
                <td style="text-align: center;"><?php echo $row['Mapel3'] ?></td>
                <td style="text-align: center;"><?php echo $row['Waktu3'] ?></td>
                <td style="text-align: center;"><?php echo $row['Pengajar3'] ?></td>
                <td>
                    <a style="text-decoration: none;color:#008CBA" href="form edit jadwal mapel.php?id=<?php echo $row['ID'];?>"><span class="badge bg-primary">Edit</span></a>
                    <a style="text-decoration: none;color:#008CBA" href="delete jadwal 10 ipa 1.php?id=<?php echo $row['ID'];?>"><span class="badge bg-danger">Delete</span></a>  
                </td>
            </tr>

            <?php } ?>

        </table>
    </div>
    </div>
    </div>
      
</body>
</html>


