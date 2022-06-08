<?php

session_start();

if(!$_SESSION["login"]){
    header("Location: inputLogin.php");
}

if(!isset($_SESSION["remember"])){
    unset($_SESSION["login"]);
}

$data = [
    ['Alfia Nurul Firdaus','120411100056','Kediri'],
    ['Ahmad Fauzi','120411100043','Sumenep'],
    ['Sinta Nuraini','120411100087','Bangkalan'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <h2 style="text-align: center;">Daftar Mahasiswa</h2>
    <table class="table table-striped">
        <tr >
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
        </tr>
        <?php foreach($data as $dt):?>
        <tr>
            <td><?php echo $dt[0] ?></td>
            <td><?php echo $dt[1] ?></td>
            <td><?php echo $dt[2] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form action="keluar.php">
        <button>Logout</button>
    </form>
</body>
</html>