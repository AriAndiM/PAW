<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Mapel IPA</title>
</head>
<body style="background-image:url('sma (2).png');background-size:cover;background-repeat:initial;">
    <center><h1 style="margin-top: 30px;margin-bottom:20px;">Tambah Mapel IPA</h1></center>
    <div class="container" style="width:max-content;text-align:center;background-color:#3BCCB6;margin-top:50px;border-radius:8%;">
        <form action="action tambah mapel ipa.php" method="POST" style="padding:30px;">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">ID Mapel</span>
                <input type="text" class="form-control" name="mapelID" placeholder="Masukkan ID Mapel" aria-label="mapelID" aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">ID Jurusan</span>
                <input type="text" class="form-control" name="jurusanID" placeholder="Masukkan ID Jurusan" aria-label="jurusanID" aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Nama Mapel</span>
                <input type="text" class="form-control" name="Nama_Mapel" placeholder="Enter Nama Mapel" aria-label="nama mapel" aria-describedby="addon-wrapping" />
            </div><br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Deskripsi</span>
                <input type="text" class="form-control" name="Deskripsi" placeholder="Enter Deskripsi" aria-label="deskripsi" aria-describedby="addon-wrapping" />
            </div><br>
            <div>
                <button class="btn btn-dark btn-lg" type="submit">Tambah</button>
                <a class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="admin daftar mapel ipa.php">Back</a>
            </div>
        </form>
    </div>
</body>
</html>