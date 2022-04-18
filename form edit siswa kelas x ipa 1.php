<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Siswa 10 IPA 1</title>
</head>
<body bgcolor="#E45826">  
<div style="color:white;text-align:center;padding-top:40px;">
    <h1 style="text-align: center;font-family:Fira Sans;color:white;padding-top:20px;"><b>Form Edit Siswa Kelas X IPA 1</b></h1>

    <?php
        include "koneksi.php";

        $id=$_GET['Id'];
        $sql="SELECT*FROM kelas WHERE Id=$id";
        $hasil=mysqli_query($conn,$sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <?php
        while($row=mysqli_fetch_array($hasil))
        {
        ?>
        <form action="update siswa x ipa 1.php" method="POST">
            <table align="center" style="text-align: left;">
            <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">

                <tr>
                    <td>NISN</td>
                    <td><input type="number" value="<?php echo $row['NISN'] ?>" name="NISN" style="width: 300px;"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" value="<?php echo $row['NamaSiswa'] ?>" name="NamaSiswa" style="width: 300px;"></td>
                </tr>
            </table>
            <div style="padding-top:30px;text-align:center;">
                <button type="submit" style="background-color: #008CBA;border-radius:10%;color:black;width:50px;height:30px;font-weight:bold;">Edit</button>
                <button style="background-color: #e7e7e7;border-radius:10%;width:70px;height:30px;"><a href="siswa 10 ipa 1.php" style="color: black;text-decoration:none;font-weight:bold;">Cancel</a></button>
            </div>
        </form>
        <?php } ?>
    </div>
</body>
</html>