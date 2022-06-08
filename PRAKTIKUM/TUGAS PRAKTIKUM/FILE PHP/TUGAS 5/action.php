<?php
    include "koneksi.php"; 
    $nrp=$_POST['nrp'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $sql="INSERT INTO tbl_mahasiswa VALUES (null,'$nrp','$nama','$email','$alamat')";
    $hasil=mysqli_query($connect,$sql);
    if(!$hasil){
            echo "<script>alert('Berhasil ditambahkan')</script>";
    } else {
            echo "<script>alert('Gagal ditambahkan')</script>";
    }
?>