<?php
	//koneksi
	$koneksi = mysqli_connect('localhost','root','','epemda');

	//daftar
	if(isset($_POST['daftar'])){
		//kodingan untuk tombol daftar pas di klik
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//kodingan untuk memasukan data di database
		$insert = mysqli_query($koneksi,"INSERT INTO akun (username,pass) VALUES ('$username','$password')");
		
		if($insert){
			//kalo berhasil
			header('location:login.php');
		}else{
			echo'
			<script>
				alert("Registrasi gagal");
				window.location.href="register.php";
			</script>';
		}
		
	}
?>