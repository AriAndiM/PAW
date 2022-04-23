<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<body>
    <center>
    <h2>Tabel Daftar Data</h2>
    <button style="background-color: green;"><a href="form tambah.php" style="color:white;text-decoration:none;"><b>Tambah</b></a></button> <br><br>
    <table border="1">
        <tr>
            <td>Id 133</td>
            <td>Nama 133</td>
            <td>Email 133</td>
            <td>Action</td>
        </tr>
        <?php
        include "koneksiUts.php";

        $sql="SELECT * FROM tbl_133";
        $hasil=mysqli_query($connect,$sql);
        while ($row=mysqli_fetch_array($hasil))
        {
        ?>

        <tr>
            <td><?php echo $row['id_133'] ?></td>
            <td><?php echo $row['nama_133'] ?></td>
            <td><?php echo $row['email_133'] ?></td>
            <td>
                <button style="background-color: Cyan;"><a href="form edit.php?id=<?php echo $row['id_133']; ?>" style="color:black;text-decoration:none;">Edit</a></button>
                |
                <button style="background-color: red;"><a href="action delete.php?id=<?php echo $row['id_133'];?>" style="color:white;text-decoration:none;"><b> Delete </b></a></button>
            </td>
        </tr>

        <?php
        }
        ?>
    </table>
    </center>
</body>
</html>