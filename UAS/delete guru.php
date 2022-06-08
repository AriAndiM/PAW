<?php
    include "koneksi.php";  
    $id=$_GET['Id'];
    $sql= "DELETE FROM guru WHERE ID=$id";
    $hasil= mysqli_query($conn,$sql);
    if(!$hasil){
        echo "<script>alert('Gagal Menghapus guru'); document.location.href='admin daftar guru.php';</script>";
    } else {
        header('location:admin daftar guru.php');
    }
?>