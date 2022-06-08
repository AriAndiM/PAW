<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-image:url('https://img.freepik.com/free-photo/abstract-blue-extruded-voronoi-blocks-background-minimal-light-clean-corporate-wall-3d-geometric-surface-illustration-polygonal-elements-displacement_1217-2510.jpg?size=626&ext=jpg&ga=GA1.2.1445788865.1654314075');background-size:cover;background-repeat:initial;">
<section class="vh-100">
<div class="container-fluid h-custom" >
<div style="text-align: center;">
    <h1 style="text-align: center;padding-top:40px;color:white;font-family:lucida;"><b>SISTEM INFORMASI SEKOLAH MENENGAH ATAS</b></h1><br>
    <p class="btn btn-danger" style="text-align: center;">Login hanya dapat dilakukan oleh <b>Admin</b> dan <b>Wali Kelas</b></p>
</div>
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="login.png"
        class="img-fluid" alt="Sample image">
    </div>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form action="ceklogin.php" method="POST">
        <div class="form-outline mb-4" style="color:white;">Username</label>
          <input name="username" type="text" id="form3Example3" class="form-control form-control-lg"
            placeholder="Enter a valid username" />
        </div>
        <div class="form-outline mb-3">
            <label class="form-label" style="color:white;" for="form3Example4">Password</label>
          <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
            placeholder="Enter password" />
        </div>
        <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          <a class="btn btn-warning btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="home page.php">Home</a>
          <button type="reset" class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Reset</button>
        </div>
      </form>
    </div>
</div>
</div>
</section>
</body>
</html>