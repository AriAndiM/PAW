
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body style="background-color: #9494b8;">
    <div class="container" style="background-color:aquamarine;text-align:center;width:max-content;border-radius:10px;margin-top:30px;">
        <?php
        include "koneksi.php";

        $kodeBarang=$_POST['kode_barang'];
        $namaBarang=$_POST['nama_barang'];
        $satuan=$_POST['satuan'];
        $qty=$_POST['qty'];
        $harga=$_POST['harga'];

        $sql="UPDATE tbl_133 SET nama_barang='$namaBarang',satuan='$satuan',qty='$qty',harga='$harga' WHERE kode_barang='$kodeBarang'";
        $hasil=mysqli_query($conn,$sql);
        if(!$hasil){
            echo "</b>Edit barang gagal</b>";
            echo "<a href='barang.php'>Kembali</a>";
        }else{
            echo "<b>Edit barang berhasil</b> <br/>";
            echo "<a href='barang.php'>Show Barang</a>";
        }
        ?>
    </div>
</body>
</html>