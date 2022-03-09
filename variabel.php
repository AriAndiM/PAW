<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel</title>
</head>
<body>
    <?php
    $a=6;
    $b=8;
    $c=10;

    echo "<br/> PENJUMLAHAN<br/>";
    $penjumlahan=$a+$c;
    echo $a,"+",$c,"=",$penjumlahan;

    echo "<br/> PENGURANGAN<br/>";
    $pengurangan=$c-$b;
    echo $c,"-",$b,"=",$pengurangan;

    echo "<br/> PERKALIAN<br/>";
    $perkalian=$a*$c;
    echo $a,"*",$c,"=",$perkalian;

    ?>
</body>
</html>