<?php
    include "koneksi.php";  
    $id=$_GET['Id'];
    $sql= "DELETE FROM jurusan WHERE ID=$id";
    $hasil= mysqli_query($conn,$sql);
    if(!$hasil){
        echo "<script>alert('Gagal Menghapus Jurusan'); document.location.href='admin daftar jurusan.php';</script>";
    } else {
        header('location:admin daftar jurusan.php');
    }
?>