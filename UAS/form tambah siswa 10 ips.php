<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Siswa</title>
</head>
<body style="background-image:url('sma (2).png');background-size:cover;background-repeat:no-repeat;">
    <center><h1 style="margin-top: 30px;margin-bottom:20px;">Tambah Siswa X IPS</h1></center>
    <div class="container" style="width:max-content;text-align:center;background-color:#3BCCB6;margin-top:50px;border-radius:8%;">
        <form action="action tambah siswa 10 ips.php" method="POST" style="padding:30px;">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">ID Kelas</span>
                <input type="text" class="form-control" name="kelasID" placeholder="Enter NISN" aria-label="nisn" aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">ID Siswa</span>
                <input type="text" class="form-control" name="siswaID" placeholder="Enter NISN" aria-label="nisn" aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">NISN</span>
                <input type="text" class="form-control" name="NISN" placeholder="Enter NISN" aria-label="nisn" aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Nama Siswa</span>
                <input type="text" class="form-control" name="Nama_Siswa" placeholder="Enter Nama Siswa" aria-label="nama" aria-describedby="addon-wrapping" />
            </div><br>
            <div>
                <button class="btn btn-dark btn-lg" type="submit">Tambah</button>
                <a class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="10 ips.php">Back</a>
            </div>
        </form>
    </div>
</body>
</html>