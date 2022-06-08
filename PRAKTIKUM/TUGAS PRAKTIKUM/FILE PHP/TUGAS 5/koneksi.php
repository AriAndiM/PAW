<?php
$host='localhost';
$user='root';
$password='';
$db='mahasiswa';
$connect=mysqli_connect($host,$user,$password,$db);
if(!$connect){
    echo "<script> alert('Gagal Terhubung') </script>";
}
?>