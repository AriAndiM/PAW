<?php
    include "koneksi.php";  
    $id=$_GET['Id'];
    $sql= "DELETE FROM siswa WHERE ID=$id";
    $hasil= mysqli_query($conn,$sql);
    if(!$hasil){
        echo "<script>alert('Gagal Menghapus Siswa'); document.location.href='11 ips.php';</script>";
    } else {
        header('location:11 ips.php');
    }
?>