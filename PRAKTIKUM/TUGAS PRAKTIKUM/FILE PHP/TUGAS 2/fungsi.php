<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TR modul 2</title>
</head>
<body>
    <h1>Modul 2 Fungsi Dan Array</h1>
    <p>Nama : Ari Andi Mustofa <br> NIM : 200411100133</p>
</body>
</html>

<?php
    
    function jumlah($x,$y){
        return $x+$y;
    }
    echo "Pemanggilan Fungsi jumlah()<br>";
    echo "Jumlah x + y :".jumlah(10,2)."<br>";
    echo "Jumlah x + y :".jumlah(10,6)."<br>";
    echo "Jumlah x + y :".jumlah(5,2)."<br>";

    function kali($x,$y){
        return $x*$y;
    }
    echo "Pemanggilan Fungsi kali()<br>";
    echo "Jumlah x * y :".jumlah(17,5)."<br>";
    echo "Jumlah x * y :".jumlah(81,5)."<br>";
    echo "Jumlah x * y :".jumlah(135,5)."<br>";

    function bagi($x,$y){
        return $x/$y;
    }
    echo "Pemanggilan Fungsi bagi()<br>";
    echo "Jumlah x / y :".bagi(10,5)."<br>";
    echo "Jumlah x / y :".bagi(11,5)."<br>";
    echo "Jumlah x / y :".bagi(9,5)."<br>";

?>