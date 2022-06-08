<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabel</title>
</head>
<body>
    <h1>Modul V PHP dan MySQL</h1>
    <p>nama/nrp : Ari Andi Mustofa</p>
    <hr>
    <h2>Master Data Mahasiswa</h2>
    <button style="border:1px solid;"><a href="form.php" style="text-decoration: none;">Tambah</a></button>
    <table class="table">
        <tr>
            <td>No.</td>
            <td>NRP</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Alamat</td>
            <td>Operasi</td>
        </tr>
        <?php 
        include "koneksi.php";

        $query="SELECT*FROM tbl_mahasiswa";
        $hasil=mysqli_query($connect,$query);
        while ($row=mysqli_fetch_array($hasil)){
        ?>
        <tr>
            <td><?php echo $row['nomor'] ?></td>
            <td><?php echo $row['nrp'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td>
                <a href="form edit.php?no=<?php echo $row['nomor']; ?>" style="text-decoration: none;">Edit</a> |
                <a href="delete.php?no=<?php echo $row['nomor']; ?>" style="text-decoration: none;">Hapus</a> 
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>