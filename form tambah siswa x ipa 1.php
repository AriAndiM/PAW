<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa 10 IPA 1</title>
</head>
<body bgcolor="#E45826">
    <h1 style="color:white;text-align:center;padding-top:40px;"><b>Form Input Siswa Kelas X IPA 1</b></h1>

    <div style="text-align: center;font-family:Fira Sans;color:white;padding-top:20px;">
        <form method="POST" action="action tambah siswa x ipa 1.php">
            <table align="center" style="text-align: left;">
                <tr>
                    <td>NISN</td>
                    <td><input  type="number" class="form-control" id="nisn" name="NISN" style="width: 300px;"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" class="form-control" id="nama" name="NamaSiswa" style="width: 300px;"></td>
                </tr>
            </table>
            <div style="padding-top:30px;text-align:center;">
                <button type="submit" style="background-color: #008CBA;border-radius:10%;color:black;width:max-content;height:30px;font-weight:bold;">Submit</button>
                <button type="reset" style="background-color:#f44336;border-radius:10%;color:black;width:50px;height:30px;font-weight:bold;">Reset</button>
                <button type="link" style="background-color: #e7e7e7;border-radius:10%;width:max-content;height:30px;"><a href="siswa 10 ipa 1.php" style="color: black;text-decoration:none;font-weight:bold;">Cancel</a></button>
            </div>
        </form>
    </div>
</body>
</html>