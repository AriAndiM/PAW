<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Action</title>
</head>
<body style="background-image:url('sma (2).png');background-size:cover;background-repeat:no-repeat;">
<?php
    include "koneksi.php";  
    $id=$_POST['ID'];
    $guruid=$_POST['guruID'];
    $nip=$_POST['NIP'];
    $nama=$_POST['Nama_Guru'];        
    $sql="UPDATE guru SET guruID='$guruid',NIP='$nip',Nama_Guru='$nama' WHERE ID='$id'";
    $hasil=mysqli_query($conn,$sql);
    if(!$hasil){
            echo "<script>alert('gagal Mengubah Mata Pelajaran'); document.location.href='form edit guru.php';</script>";
        } else {
            header('location:admin daftar guru.php');
    }
?>
</body>
</html>