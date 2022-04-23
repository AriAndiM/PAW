<?php
include "koneksiUts.php";

$nama=$_POST['nama_133'];
$email=$_POST['email_133'];
$sql="INSERT INTO tbl_133 VALUES (null,'$nama','$email')";
$hasil=mysqli_query($connect,$sql);
if(!$hasil){
    echo "Maaf,Anda Gagal Menambahkan Data <br>";
    echo "<a href='tabel.php'>Show Tabel</a>";
} else {
    echo "Selamat,Berhasil Menambahkan Data <br>";
    echo "<a href='tabel.php'>Show Tabel</a>";
}
?>