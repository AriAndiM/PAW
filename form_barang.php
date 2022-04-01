<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#262626;color:white;">
<h1 style="text-align: center;">Form Tambah Barang</h1>
    <form method="POST" action="action.php">

        <div class="mb-3 mt-3">
            <label for="nama barang">Nama Barang : </label>
            <input type="text" class="form-control" id="nama barang" placeholder="Enter nama barang" name="nama barang">
        </div>
        <div class="mb-3">
            <label for="satuan">Satuan : </label>
            <input type="text" class="form-control" id="satuan" placeholder="Enter satuan" name="satuan">
        </div>
        <div class="mb-3">
            <label for="qty">Qty : </label>
            <input type="number" class="form-control" name="qty" placeholder="Enter qty" name="qty"> 
        </div>
        <div class="mb-3">
            <label for="harga">Harga : </label>
            <input type="number" class="form-control" name="harga" placeholder="Enter harga" name="harga"> 
        </div>
        <div style="align-items: center;">
            <button type="submit" class="btn btn-primary">Tambah</button> 
            <a href="barang.php" class="btn btn-primary">Kembali</a>
        </div>
        </form>
</body>
</html>