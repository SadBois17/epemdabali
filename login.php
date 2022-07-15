<?php
	include 'fungsi.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
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
            <img src="images/DanauBratan.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
 <div class="col-lg-10 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                   <a href="index.php"><h1 class="m-0 display-4 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-1 mr-1">E-Pemda Bali</span></a></h1>
                </a>
            </div>
	
<?php	//login
	if(isset($_POST['login'])){
		//kodingan untuk tombol daftar pas di klik
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//kodingan untuk mengecek data di database
		$login = mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$username' AND pass='$password'");
		$cek = mysqli_num_rows($login);
		
		if($cek > 0){
 
		$data = mysqli_fetch_assoc($login);
		
		if($data['level']=="admin"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			// alihkan ke halaman dashboard Admin
			header("location:admin.php");
		}else if($data['level']=="user"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "user";
			// alihkan ke halaman dashboard User
			header("location:pegawai.php");
		}else{
			echo'
			<script>
				alert("Login gagal");
				window.location.href="login.php";
			</script>';
		}
	}
}
?>
              <p class="login-card-description">Masuk ke akun Anda</p>
              <form method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">Username</label>
                    <input type="text" name="username" id="email" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <button name="login" id="login" class="btn btn-block login-btn mb-4" type="submit">Masuk</button>
                </form>
                <p class="login-card-footer-text">Belum punya akun? <a href="register.php" class="text-reset">Daftar disini</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
