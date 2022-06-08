<?php
$localhost='localhost';
$user='root';
$password='';
$db='sma';
$conn=mysqli_connect($localhost,$user,$password,$db);
if (!$conn){
    echo "Gagal terhubung ke database";
}
?>