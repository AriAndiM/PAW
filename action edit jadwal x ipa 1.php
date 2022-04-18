<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal</title>
</head>
<body style="background-color:#E45826;">
<div style="background-color:#ccccb3;font-size:35px;font-weight:bold;font-family:bradley-hand,cursive;text-align:center;height:200px; width:1150px;margin:60px;border-radius:10px;">
        <?php
            include "koneksi.php";  
            $id=$_POST['ID'];
            $hari=$_POST['Hari'];
            $mapel1=$_POST['Mapel1'];
            $waktu1=$_POST['Waktu1'];
            $Pengajar1=$_POST['Pengajar1'];
            $mapel2=$_POST['Mapel2'];
            $waktu2=$_POST['Waktu2'];
            $Pengajar2=$_POST['Pengajar2'];
            $mapel3=$_POST['Mapel3'];
            $waktu3=$_POST['Waktu3'];
            $Pengajar3=$_POST['Pengajar3'];  
            
            $sql="UPDATE jadwal2 SET Hari='$hari',Mapel1='$mapel1',Waktu1='$waktu1',Pengajar1='$Pengajar1',Mapel1='$mapel2',Waktu1='$waktu2',Pengajar2='$Pengajar2',Mapel1='$mapel3',Waktu1='$waktu3',Pengajar3='$Pengajar3' WHERE ID='$id'";
            $hasil=mysqli_query($conn,$sql);
            if(!$hasil){
                    echo "gagal Mengubah Jadwal Mata Pelajaran";
            } else {
                    echo "Berhasil Mengubah Jadwal Mata Pelajaran";       
            }
        ?>
        <div style="padding-top:20px;">
                <button type="link" style="background-color: #E45826;width:80px;height:40px;border-radius:10%;"><a href="jadwal mapel x ipa 1.php" style="color: #ccccb3;text-decoration:none;font-size:20px;">Back</a></button>
                <button type="link" style="background-color: #E45826;width:80px;height:40px;border-radius:10%;"><a href="home.php" style="color: #ccccb3;text-decoration:none;font-size:20px;">Home</a></button>
        </div>
        <div>
                <img src="sukses.png">
        </div>
</div>
</body>
</html>