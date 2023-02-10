<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PELAPORAN PENGADUAN MASYARAKAT</title>
</head>
<body>
<nav class="navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">PUSAT PELAPORAN MASYARAKAT</a>
    <button class="btn btn-light"> <a href="home.php">Kembali</a></button>
    </div>
  </div>
</nav>

<div class="row">
  <div class="col mb-3 mb-sm-0">
      <div class="card-body">
<div class="row mt-5">
    <div class="col">
    <div class="text-center">
              <img src="https://png.pngtree.com/png-vector/20190726/ourmid/pngtree-human-character-logo-sign-png-image_1602831.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
    <h5 class="card-title text-center">SELAMAT DATANG
    </h5>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-5">
        <h2 class="text-dark mt-5">Login</h2>
        <div class="text-center mb-5 text-dark"></div>
      </div>
</div>

<form action="cek_login.php" method="post">

    <tr>
        <td width="130">USERNAME</td>
        <td><div class="mb-3 mt-4"><input type="text" class="form-control" placeholder="username" name="USERNAME" id="USERNAME"></td></div>
    </tr>
    <tr>
        <td width="130">PASSWORD</td>
        <td><div class="mb-3"><input type="password" class="form-control" placeholder="password" name="PASSWORD" id="PASSWORD"></td></div>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" class="btn btn-dark px-5 mb-5 w-100" value="login" name="login"></td>
    </tr>

    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Sudah Punya Akun? <a href="registrasi.php">Registrasi</a>
            </div>

</form>
</div>
</div>
</div>
</div>