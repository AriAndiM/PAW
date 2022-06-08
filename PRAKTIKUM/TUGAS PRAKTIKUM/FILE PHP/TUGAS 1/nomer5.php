<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 5</title>
</head>
<body>
    <h1>Modul I PHP</h1>
    <p>Nama : Ari Andi Mustofa</p>
    <p>NIM : 200411100133</p><br>

    <?php
    $hari = date("l");
    $bulan=date('m');
    $tanggal=date('d');
    $tahun=date('Y');

    //hari
    if ($hari == "Sunday"){
        $hari="Minggu";
    }
    elseif ($hari == "Monday"){
        $hari="Senin";
    }
    elseif ($hari == "Tuesday"){
        $hari="Selasa";
    }
    elseif ($hari == "Wednesday"){
        $hari = "Rabu";
    }
    elseif ($hari == "Thursday"){
        $hari="Kamis";
    }
    elseif ($hari == "Friday"){
        $hari="Jum'at";
    }
    else{
        $hari="sabtu";
    }


    //Bulan
    if ($bulan == "01"){
        $bulan="Januari";
    }
    elseif ($bulan == "02"){
        $bulan="Februari";
    }
    elseif ($bulan == "03"){
        $bulan="Maret";
    }
    elseif ($bulan == "04"){
        $bulan="April";
    }
    elseif ($bulan == "05"){
        $bulan="Mei";
    }
    elseif ($bulan == "06"){
        $bulan="Juni";
    }
    elseif ($bulan == "07"){
        $bulan="Juli";
    }
    elseif ($bulan == "08"){
        $bulan="Agustus";
    }
    elseif ($bulan == "09"){
        $bulan="September";
    }
    elseif ($bulan == "10"){
        $bulan="Oktober";
    }
    elseif ($bulan == "11"){
        $bulan="November";
    }
    else{
        $bulan="Desember";
    }

    echo "<b>Sekarang Hari ",$hari," : ","Tanggal ",$tanggal," ",$bulan," ",$tahun,"<b>";

    ?>
</body>
</html>