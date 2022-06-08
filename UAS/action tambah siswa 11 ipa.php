<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Siswa</title>
</head>
<body>
    <?php
        include "koneksi.php";  
        $kelasid=$_POST['kelasID'];
        $siswaid=$_POST['siswaID'];
        $nisn=$_POST['NISN'];
        $nama=$_POST['Nama_Siswa'];

        $sql="INSERT INTO siswa VALUES (null,'$siswaid','$kelasid','$nisn','$nama')";
        $hasil=mysqli_query($conn,$sql);

        if(!$hasil){
                echo "<script>alert('Gagal Menambah Siswa');document.location.href='form tambah siswa 11 ipa.php';</script>";
        } else {
                header('location:11 ipa.php');       
        }
    ?>
</body>
</html>