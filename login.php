<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body bgcolor="#E6D5B8">
    <?php 
	  if(isset($_GET['pesan'])){
	  	if($_GET['pesan'] == "gagal"){
        echo '<script type="text/JavaScript">';
	  		echo 'alert("Login gagal! username dan password salah!")';
        echo '</script>';
	  	}
	  }
	  ?>   

<h2>Login Form </h2>
    <form action="cek login.php" method="POST">
      <div class="imgcontainer">
        <img src="https://scontent.fsub4-1.fna.fbcdn.net/v/t39.30808-6/278190613_529025475417143_5965668426110964488_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeExeq8_SJyYsSbmloH78GXz_xria2H5hjn_GuJrYfmGOU3fZPs8-MqihVBmnAseIIzVWt_rkddGlwVXEz_wE-zH&_nc_ohc=khIXfmDN8LYAX8riVge&_nc_zt=23&_nc_ht=scontent.fsub4-1.fna&oh=00_AT964DHWXnXyjmV4mHja8PLBQ3HtB9WNqJq6SMPzPtkx8Q&oe=625A5848" alt="Avatar" class="avatar">
      </div>
    
      <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="Username" required>
    
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Password" required>
        
        <button type="submit">Masuk</button>
      </div>
    
    </form>

</body>
</html>