<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Jurusan</title>
</head>
<body style="background-color: rgb(19, 110, 155);">
    <div class="container" style="padding:30px;background-color:rgb(19, 110, 155);color:#DBDFFD;;">
    <center><h1>Daftar Jurusan SMA</h1></center>
    <br>
    <div class="text-center text-lg-start mt-4 pt-2">
        <a class="btn btn-light btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;margin-right:3rem;" href="form tambah jurusan.php">Tambah Jurusan</a><br>
    </div>
    <table class="table" style="text-align: center;color:white;" >
            <tr style="color:#DBDFFD;">
                <th>No.</th>
                <th>ID Jurusan</th>
                <th>Nama Jurusan</th>
                <th>Action</th>
            </tr>
            <?php

            include "koneksi.php";

            $query="SELECT * FROM jurusan";
            $hasil=mysqli_query($conn,$query);

            while ($row=mysqli_fetch_array($hasil))
            {
            ?>

            <tr>
                <td><?php echo $row['ID'] ?></td>
                <td><?php echo $row['jurusanID'] ?></td>
                <td><?php echo $row['Nama_Jurusan'] ?></td>
                <td>
                    <a style="text-decoration: none;color:#008CBA" href="form edit jurusan.php?Id=<?php echo $row['ID'];?>"><span class="badge bg-primary">Edit</span></a>
                    |
                    <a style="text-decoration: none;color:#008CBA" href="delete jurusan.php?Id=<?php echo $row['ID'];?>"><span class="badge bg-danger">Delete</span></a>  
                </td>
            <?php } ?>
        </table>

        <div class="text-center text-lg-start mt-4 pt-2">
          <a class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;margin-right:3rem;" href="homeadmin.php">Back</a>
          <a class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="logout.php">Keluar</a>
        </div>

    </div>
    </div>
</body>
</html>