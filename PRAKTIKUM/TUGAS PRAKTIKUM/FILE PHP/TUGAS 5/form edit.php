<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <?php
        include "koneksi.php";

        $no=$_GET['no'];
        $sql="SELECT * FROM tbl_mahasiswa WHERE nomor='$no'";
        $hasil=mysqli_query($connect,$sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>

        <?php
        while($row=mysqli_fetch_array($hasil))
        {
        ?>

        <form action="edit.php" method="POST">
        <input type="hidden" name="no" value="<?php echo $row['nomor'] ?>">
            <div style="padding-bottom: 10px;">
                <label for="">NRP</label><br>
                <input type="text" name="nrp" value="<?php echo $row['nrp'] ?>"><br>
            </div>
            <div style="padding-bottom: 10px;">
                <label for="">Nama</label><br>
                <input type="text" name="nama" value="<?php echo $row['nama'] ?>"><br>
            </div>
            <div style="padding-bottom: 10px;">
                <label for="">email</label><br>
                <input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
            </div>
            <div style="padding-bottom: 10px;">
                <label for="">alamat</label><br>
                <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>"><br>
            </div>

            <button type="submit">Edit</button>
        </form>

        <?php } ?>
</body>
</html>