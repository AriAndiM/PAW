<?php
    include "koneksi.php";  
    $id=$_GET['Id'];
    $mapelid=$_POST['mapelID'];
    $jurusanid=$_POST['jurusanID'];
    $nama=$_POST['Nama_Mapel'];        
    $deskripsi=$_POST['Deskripsi'];
    $sql= "DELETE FROM mapel WHERE ID=$id";
    $hasil= mysqli_query($conn,$sql);
    if(!$hasil){
        echo "<script>alert('Gagal Menghapus mapel IPA'); document.location.href='admin daftar mapel ips.php';</script>";
    } else {
        header('location:admin daftar mapel ips.php');
    }
?>