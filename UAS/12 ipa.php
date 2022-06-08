<?php
    session_start();
    //cek apakah yang sudah login dan levelnya wali 10 ipa
    if($_SESSION['level']!='wali kelas' || empty ($_SESSION['login'])){
        echo "<script>alert('Anda salah masuk kelas'); document.location.href='opsi kelas siswa.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>XI IPS</title>
</head>
<body style="background-color: rgb(19, 110, 155);" >
    <div class="container" style="padding:30px;color:#DBDFFD;">
    <center><h1>Siswa XI IPS</h1></center>
    <br>
    <div class="text-center text-lg-start mt-4 pt-2">
        <a class="btn btn-light btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;margin-right:3rem;" href="form tambah siswa 12 ipa.php">Tambah Siswa</a><br>
    </div>
    <table class="table" style="color:white;" >
            <tr style="color:#DBDFFD;">
                <th>ID Siswa</th>
                <th>ID Kelas</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            <?php
            include "koneksi.php";

            $query="SELECT * FROM siswa WHERE KelasID='K005'";
            $hasil=mysqli_query($conn,$query);

            while ($row=mysqli_fetch_array($hasil))
            {
            ?>

            <tr>
                <td><?php echo $row['siswaID'] ?></td>
                <td><?php echo $row['kelasID'] ?></td>
                <td><?php echo $row['NISN'] ?></td>
                <td><?php echo $row['Nama_Siswa'] ?></td>
                <td>
                    <a style="text-decoration: none;color:#008CBA" href="form edit siswa 12 ipa.php?Id=<?php echo $row['ID'];?>"><span class="badge bg-primary">Edit</span></a>
                    |
                    <a style="text-decoration: none;color:#008CBA" href="delete siswa 12 ipa.php?Id=<?php echo $row['ID'];?>"><span class="badge bg-danger">Delete</span></a>  
                </td>
            <?php } ?>
        </table>

        <div class="text-center text-lg-start mt-4 pt-2">
          <a class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;margin-right:3rem;" href="opsi kelas siswa.php">Back</a>
          <a class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="homewali.php">Keluar</a>
        </div>

    </div>

</body>
</html>