<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Edit</title>
</head>
<body>
    <h2>Form Edit Data</h2>
    <?php
    include "koneksiUts.php";

    $id=$_GET['id'];
    $sql="SELECT * FROM tbl_133 WHERE id_133='$id'";
    $hasil=mysqli_query($connect,$sql);
    
    while ($row=mysqli_fetch_array($hasil))
    {
    ?>

    <form action="action edit.php" method="POST">
        <input type="hidden" name="id_133" value="<?php echo $row['id_133'] ?>">
        Nama : <br>
        <input type="text" name="nama_133" value="<?php echo $row['nama_133'] ?>"><br>
        email : <br>
        <input type="text" name="email_133" value="<?php echo $row['email_133'] ?>"><br><br>

        <button type="submit">Tambah</button>
        <button><a href="tabel.php">Cancel</a></button>
    </form>

    <?php
    }
    ?>

</body>
</html>