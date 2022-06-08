<?php

session_start();

$user=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST["remember"])){
    if(($user == 'andi' && $password == '123')){
        $_SESSION['login']=true;
        header("Location:home.php");
    }else{
        echo "<script>alert('Username atau password salah');document.location.href='inputLogin.php'</script>";
    }
}else{
    echo "<script>alert('Klik remember me');document.location.href='inputLogin.php';</script>";
}

?>