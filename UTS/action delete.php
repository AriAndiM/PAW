<?php
include "koneksiUts.php";

$id=$_GET['id'];
$sql="DELETE FROM tbl_133 WHERE id_133='$id'";
$hasil=mysqli_query($connect,$sql);
if(!$hasil){
    echo "Maaf,Anda Gagal Menghapus Data <br>";
    echo "<a href='tabel.php'>Show Tabel</a>";
} else {
    echo "Selamat,Anda Berhasil Menghapus Data <br>";
    echo "<a href='tabel.php'>Show Tabel</a>";
}
?>