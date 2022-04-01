<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tambah Barang</title>
</head>
<body style="background-color:#262626;padding-bottom:10px;">
<div class="container" style="background-color:#ccccb3;text-align:center; width:max-content;margin-top:20%;border-radius:10px;">
    <?php
    include "koneksi.php";

    $namaBarang=$_POST['nama_barang'];
    $satuan=$_POST['satuan'];
    $qty=$_POST['qty'];
    $hargaSatuan=$_POST['harga'];

    $sql="INSERT INTO tbl_133 VALUES (null,'$namaBarang','$satuan','$qty','$hargaSatuan')";
    $hasil=mysqli_query($conn,$sql);
    if(!$hasil){
        echo "<h2>Tambah barang gagal</h2>";
        echo "<a href='barang.php'>Show Barang</a>";
    } else {
        echo "<h2>Tambah barang berhasil</h2>";
        echo "<a href='barang.php'>Show Barang</a>";
    }
    ?>
</div>
</body>
</html>