<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel Local dan Global</title>
</head>
<body>
    <h1>Modul I PHP</h1>
    <p>Nama : Ari Andi Mustofa</p>
    <p>NIM : 200411100133</p><br>

    <?php

    function Coba(){
        $x=6;
        echo "variabel x mempunyai nilai ",$x," dan merupakan variabel local <br><br>";
    }
    Coba();
    ?>

    <?php
    $a=20;
    $b=10;
     function kali(){
         global $a,$b;
         $hasil=$a*$b;
         echo $a,"*",$b,"=",$hasil,"<br>";
        echo "variabel a mempunyai nilai ",$a,"dan variabel b mempunyai nilai ",$b," kedua variabel tersebut merupakan variabel global <br>";
     }
     kali();

    ?>
</body>
</html>