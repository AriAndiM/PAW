<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #9494b8;">
    <h1 style="text-align: center;">Daftar Stok Barang</h1>
    
    <table border="1" class="table table-dark table-striped">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Qty</th>
            <th>Harga Satuan</th>
            <th>Action</th>
        </tr>
        <?php
        include "koneksi.php";
        
        $sql="SELECT*FROM tbl_133";
        $hasil=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?php echo $row['kode_barang'];?></td>
            <td><?php echo $row['nama_barang'];?></td>
            <td><?php echo $row['satuan'];?></td>
            <td><?php echo $row['qty'];?></td>
            <td><?php echo $row['harga'];?></td>
            <td>
            <div class="container mt-3">
                <a href="edit.php?kode_barang=<?php echo $row['kode_barang'];?>"><span class="badge bg-primary">Edit</span></a>
                <a href="delete.php?kode_barang=<?php echo $row['kode_barang'];?>"><span class="badge bg-danger">Delete</span></a>
            </div>
            </td>
        </tr>
        <?php
        }
        ?>
        <div class="container mt-3" style="padding-bottom: 20px;padding-left:0px;">
            <a href="form_barang.php"><span class="badge bg-success">Tambah</span></a>
        </div>
    </table>
</body>
</html>

