<?php
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan koneksi db
include "koneksi.php";

//menangkap data yang dikirim dari formlogin
$username=$_POST['username'];
$password=md5($_POST['password']);

//menyeleksi data user dengan username dan password yang sesuai
$login=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");

//menghitung jumlah data yang ditemukan
$cek=mysqli_num_rows($login);

//cek apakah username dn password ditemukan di database
if($cek>0){
    $data=mysqli_fetch_assoc($login);   
    //cek jika user login sebagai admin
    if($data['level']=="admin"){    
        //buat session login dan username 
        $_SESSION['login']=true;
        $_SESSION['username']=$username;
        $_SESSION['level']="admin";
        //alihkan ke halaman dahboard admin
        header("location:homeadmin.php");
    
    //jika yang login wali kelas
    } else if($data['level']=="wali kelas"){
         //buat session login dan username 
         $_SESSION['login']=true;
         $_SESSION['username']=$username;
         $_SESSION['level']="wali kelas";
         //alihkan ke halaman dahboard admin
         header("location:homewali.php");
    }
}else{
    echo "<script>alert('Username atau Password Salah'); document.location.href='login.php'";
    echo "</script>";
}


?>