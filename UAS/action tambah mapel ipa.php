<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Action</title>
</head>
<body>
    <?php
        include "koneksi.php";  
        $mapelid=$_POST['mapelID'];
        $jurusanid=$_POST['jurusanID'];
        $nama=$_POST['Nama_Mapel'];
        $deskripsi=$_POST['Deskripsi'];

        $sql="INSERT INTO mapel VALUES (null,'$mapelid','$jurusanid','$nama','$deskripsi')";
        $hasil=mysqli_query($conn,$sql);

        if(!$hasil){
                echo "<script>alert('Gagal Menambah Siswa');document.location.href='form tambah mapel ipa.php';</script>";
        } else {
                header('location:admin daftar mapel ipa.php');       
        }
    ?>
</body>
</html>