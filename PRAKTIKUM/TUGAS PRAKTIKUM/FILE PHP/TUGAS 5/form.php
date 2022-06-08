<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form action="action.php" method="POST">
        <div style="padding-bottom: 10px;">
            <label for="">NRP</label><br>
            <input type="text" name="nrp" ><br>
        </div>
        <div style="padding-bottom: 10px;">
            <label for="">Nama</label><br>
            <input type="text" name="nama"><br>
        </div>
        <div style="padding-bottom: 10px;">
            <label for="">email</label><br>
            <input type="text" name="email"><br>
        </div>
        <div style="padding-bottom: 10px;">
            <label for="">alamat</label><br>
            <input type="text" name="alamat"><br>
        </div>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>