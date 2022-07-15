<?php
	require 'login/fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar akun</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
  <link href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="images/Bajrasandi.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
 <div class="col-lg-10 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                <a href="index.php"><h1 class="m-0 display-4 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-1 mr-1">E-Pemda Bali</span></a></h1>
                </a>
            </div>
              <p class="login-card-description">Daftar akun Anda</p>
              <form method="post">
              	  <div class="form-group">
                    <label for="email" class="sr-only">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                  </div>
                  <div class="form-group mb-4">
                    <label for="email" class="sr-only">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK">
                  </div>
                  <div class="form-group mb-4">
                    <label for="email" class="sr-only">Username</label>
                    <input type="text" name="username" id="email" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Tanggal Lahir</label>
                    <input type="date" name="tgllahir" id="tanggal" class="form-control" placeholder="Tanggal Lahir">
                  </div>
                  <button name="daftar" id="daftar" class="btn btn-block login-btn mb-4" type="submit">Daftar</button>
                </form>
                <p class="login-card-footer-text">Sudah punya akun? <a href="login.php" class="text-reset">Login disini</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
