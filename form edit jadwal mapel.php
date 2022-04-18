<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Form Edit </title>
</head>
<body bgcolor="#E45826" >
<div style="color:white;text-align:center;padding-top:40px;">
    <h1 style="text-align: center;font-family:Fira Sans;color:white;padding-top:20px;"><b>Form Edit Jadwal Mapel</b></h1>
        
        <?php
        include "koneksi.php";

        $id=$_GET['id'];
        $sql="SELECT * FROM jadwal2 WHERE ID='$id'";
        $hasil=mysqli_query($conn,$sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <?php
        while($row=mysqli_fetch_array($hasil))
        {
        ?>

    <form action="action edit jadwal x ipa 1.php" method="POST">
        <table align="center" style="text-align: left;">
        <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
        <tr>
                <td>Hari</td>
                <td><input type="text" name="Hari" value="<?php echo $row['Hari'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Mapel 1</td>
                <td><input type="text" name="Mapel1" value="<?php echo $row['Mapel1'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><input type="text" name="Waktu1" value="<?php echo $row['Waktu1'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Pengajar Mapel 1</td>
                <td><input type="text" name="Pengajar1" value="<?php echo $row['Pengajar1'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Mapel 2</td>
                <td><input type="text" name="Mapel2" value="<?php echo $row['Mapel2'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><input type="text" name="Waktu2" value="<?php echo $row['Waktu2'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Pengajar Mapel 2</td>
                <td><input type="text" name="Pengajar2" value="<?php echo $row['Pengajar2'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Mapel 3</td>
                <td><input type="text" name="Mapel3" value="<?php echo $row['Mapel3'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><input type="text" name="Waktu3" value="<?php echo $row['Waktu3'] ?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td>Pengajar Mapel 3</td>
                <td><input type="text" name="Pengajar3" value="<?php echo $row['Pengajar3'] ?>" style="width: 300px;"></td>
            </tr>
        </table>
        <div style="padding-top:30px;text-align:center;">
            <button type="submit" style="background-color: #008CBA;border-radius:10%;color:black;width:50px;height:30px;font-weight:bold;">Edit</button>
            <button style="background-color: #e7e7e7;border-radius:10%;width:70px;height:30px;"><a href="jadwal mapel x ipa 1.php" style="color: black;text-decoration:none;font-weight:bold;">Cancel</a></button>
        </div>
    </form>
    </div>
    <?php } ?>

</body>
</html>