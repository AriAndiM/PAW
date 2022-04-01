<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Delete</title>
</head>
<body style="background-color:#9494b8;">
    <div class="container" style="background-color:aquamarine;padding-bottom:10px;text-align:center;width:max-content;border-radius:10px;margin-top:30px;">
        <?php
        include "koneksi.php";
    
        $kodeBarang=$_GET['kode_barang'];
        $sql= "DELETE FROM tbl_133 WHERE kode_barang=$kodeBarang";
        $hasil= mysqli_query($conn,$sql);
        if(!$hasil){
            echo "<b>Barang gagal dihapus</b> <br>";
            echo "<a href='barang.php'>Kembali</a>";
        } else{
            echo "<b>Barang berhasil dihapus</b> <br>";
            echo "<a href='barang.php'>Kembali</a>";
        }
        ?>
    </div>
</body>
</html>