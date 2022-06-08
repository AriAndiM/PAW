<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Jurusan</title>
</head>
<body>
    <?php
        include "koneksi.php";  
        $jurusanid=$_POST['jurusanID'];
        $nama=$_POST['Nama_Jurusan'];

        $sql="INSERT INTO jurusan VALUES (null,'$jurusanid','$nama')";
        $hasil=mysqli_query($conn,$sql);

        if(!$hasil){
                echo "<script>alert('Gagal Menambah Siswa');document.location.href='form tambah jurusan.php';</script>";
        } else {
                header('location:admin daftar jurusan.php');       
        }
    ?>
</body>
</html>