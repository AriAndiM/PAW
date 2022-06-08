<?php
    include "koneksi.php";  
    $no=$_POST['no'];
    $nrp=$_POST['nrp'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];     
    $sql="UPDATE tbl_mahasiswa SET nrp='$nrp',nama='$nama',email='$email',alamat='$alamat' WHERE nomor='$no'";
    $hasil=mysqli_query($connect,$sql);
    if(!$hasil){
            echo "<script>alert('gagal Mengubah')</script>";
    } else {
        echo "<script>alert('berhasil Mengubah')</script>";
    }
?>