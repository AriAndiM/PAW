<?php
include "koneksiUts.php";

$id=$_POST['id_133'];
$nama=$_POST['nama_133'];
$email=$_POST['email_133'];

$sql="UPDATE tbl_133 SET id_133='$id',nama_133='$nama',email_133='$email' WHERE id_133='$id'";
$hasil=mysqli_query($connect,$sql);
if(!$hasil){
    echo "Maaf,Anda Gagal Mengedit Data <br>";
    echo "<a href='tabel.php'>Show Tabel</a> <br>";
} else {
    echo "Selamat,Anda Berhasil Mengedit Data <br>";
    echo "<a href='tabel.php'>Show Tabel</a> <br>";
}
?>