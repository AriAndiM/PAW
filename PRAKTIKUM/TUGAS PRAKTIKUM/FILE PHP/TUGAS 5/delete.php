<?php
include "koneksi.php";
$no=$_GET['no'];
$query="DELETE FROM tbl_mahasiswa WHERE nomor='$no'";
$hasil=mysqli_query($connect,$query);
if(!$hasil){
    echo "<script>alert('gagal Menghapus')</script>";
} else {
    echo "<script>alert('berhasil Menghapus')</script>"; 
}
?>