<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body style="background-color:#E45826;">
<div style="background-color:#ccccb3;font-size:35px;font-weight:bold;font-family:bradley-hand,cursive;text-align:center;height:200px; width:1150px;margin:60px;border-radius:10px;">
        <?php
            include "koneksi.php";  

            $nisn=$_POST['NISN'];
            $nama=$_POST['NamaSiswa'];

            $sql="INSERT INTO kelas VALUES (null,'$nisn','$nama')";
            $hasil=mysqli_query($conn,$sql);
            if(!$hasil){
                    echo "gagal Menambah Siswa";
            } else {
                    echo "Berhasil Menambah Siswa";       
            }
        ?>
        <div style="padding-top:20px;">
                <button type="link" style="background-color: #E45826;width:80px;height:40px;border-radius:10%;"><a href="siswa 10 ipa 1.php" style="color: #ccccb3;text-decoration:none;font-size:20px;">Back</a></button>
                <button type="link" style="background-color: #E45826;width:80px;height:40px;border-radius:10%;"><a href="home.php" style="color: #ccccb3;text-decoration:none;font-size:20px;">Home</a></button>
        </div>
        <div>
                <img src="sukses.png">
        </div>
</div>
</body>
</html>