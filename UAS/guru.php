<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Guru</title>
</head>
<body style="background-color: rgb(19, 110, 155);" >
    <div class="container" style="padding:30px;color:#DBDFFD;">
    <center><h1>Daftar Guru</h1></center>
    <br>
    <table class="table" style="color:white;" >
            <tr style="color:#DBDFFD;">
                <th>No.</th>
                <th>NIP</th>
                <th>Nama Guru</th>
            </tr>
            <?php

            include "koneksi.php";

            $query="SELECT * FROM guru";
            $hasil=mysqli_query($conn,$query);

            while ($row=mysqli_fetch_array($hasil))
            {
            ?>

            <tr>
                <td><?php echo $row['ID'] ?></td>
                <td><?php echo $row['NIP'] ?></td>
                <td><?php echo $row['Nama_Guru'] ?></td>

            <?php } ?>
        </table>

        <div class="text-center text-lg-start mt-4 pt-2">
          <a class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;margin-right:3rem;" href="homesiswa.php">Back</a>
          <a class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="home page.php">Keluar</a>
        </div>

    </div>

</body>
</html>