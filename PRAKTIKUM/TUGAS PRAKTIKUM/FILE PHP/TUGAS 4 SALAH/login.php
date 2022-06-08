<?php

session_start();

$user=$_POST['username'];
$password=$_POST['password'];

if(($user == 'andi' && $password == '123')){
    if(isset($_POST['remember'])){
        $_SESSION['remember']=true;
    }
    $_SESSION['login']=true;

    echo "<script>
           alert('Berhasil Login');
           document.location.href='home.php';
         </script>";

}else{
    echo "<script>
           alert('Gagal Login')
           document.location.href='inputLogin.php'
          </script>";
}
?>