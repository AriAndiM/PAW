<?php
$host='localhost';
$user='root';
$password='';
$db='db_andi';
$connect=mysqli_connect($host,$user,$password,$db);
if(!$connect){
    echo 'Gagal';
}
?>