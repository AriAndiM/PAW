<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Mapel IPA</title>
</head>
<body style="background-image:url('sma (2).png');background-size:cover;background-repeat:no-repeat;">
    <center><h1 style="margin-top: 30px;margin-bottom:20px;">Edit Mapel IPA</h1></center>

    <?php
        include "koneksi.php";

        $id=$_GET['Id'];
        $sql="SELECT * FROM mapel WHERE ID=$id";
        $hasil=mysqli_query($conn,$sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <?php
        while($row=mysqli_fetch_array($hasil))
        {
    ?>

    <div class="container" style="width:max-content;text-align:center;background-color:#3BCCB6;margin-top:50px;border-radius:8%;">
        <form action="action edit mapel ips.php" method="POST" style="padding:30px;">
        <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">ID Mapel</span>
                <input type="text" class="form-control" name="mapelID" value="<?=$row['mapelID']?>"  aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">ID Jurusan</span>
                <input type="text" class="form-control" name="jurusanID" value="<?=$row['jurusanID']?>"  aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Nama Mapel</span>
                <input type="text" class="form-control" name="Nama_Mapel" value="<?=$row['Nama_Mapel']?>"  aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Deskripsi</span>
                <input type="text" class="form-control" name="Deskripsi" value="<?=$row['Deskripsi']?>" aria-describedby="addon-wrapping" />
            </div><br>
            <div>
                <button class="btn btn-dark btn-lg" type="submit">Edit</button>
                <a class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="admin daftar mapel ips.php">Back</a>
            </div>
        </form>
    <?php } ?>
    </div>
</body>
</html>