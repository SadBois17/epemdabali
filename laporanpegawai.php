<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>E-Pemda Bali</title>
<meta charset="utf-8">
<noscript>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/5grid/core.css">
<link rel="stylesheet" href="css/5grid/core-desktop.css">
<link rel="stylesheet" href="css/5grid/core-1200px.css">
<link rel="stylesheet" href="css/5grid/core-noscript.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-desktop.css">
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]>
<link rel="stylesheet" href="css/style-ie9.css">
<![endif]-->
</head>
<body class="homepage">
<div id="header-wrapper">
  <header id="header">
    <div class="5grid-layout">
      <div class="row">
        <div class="5u" id="logo">
          <h1><a href="#" class="mobileUI-site-name">E-Pemda Bali</a></h1>
          <p>Sewaka Dharma</p>
        </div>
        <div class="7u" id="menu">
          <nav class="mobileUI-site-nav">
            <ul>
              <li><a href="pegawai.php">Beranda</a></li>
              <li class="current_page_item"><a href="laporanpegawai.php">Laporan</a></li>
              <li><a href="index.php">Logout</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
</div>
<div id="wrapper" class="5grid-layout">
        <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
        	<h1>Laporan</h1>
        </div>
    <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="tambah_data.php">+ Tambah Data Baru</a>
 
	<h3>Data Laporan</h3>
	<table border="1" style="width:1200px;">
		<tr>
        	<th>No</th>
			<th>Nama Pegawai</th>
			<th>Isi Laporan</th>
			<th>Tanggal</th>	
            <th>Opsi</th>		
		</tr>
		<?php 
		include "fungsi.php";
		$query_mysql = mysqli_query($koneksi,"SELECT * FROM laporan")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr align="center">
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['username_penginput']; ?></td>
			<td><?php echo $data['text']; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
			<td>
				
				<?php
				// var_dump($data['username_penginput']);
				// var_dump($_SESSION['username']);
					if($data['username_penginput'] == $_SESSION['username']){?>
							<a class="edit" href="edit_data.php?id=<?php echo $data['id']; ?>">Edit</a> |
							<a class="hapus" href="hapuspegawai.php?id=<?php echo $data['id']; ?>">Hapus</a>					
										
				<?php
					}
				?>
							
			</td>
			
		</tr>
		<?php } ?>
	</table>

    </div>
<div class="5grid-layout" id="copyright">
  <div class="row">
    <div class="12u">
      <p>&copy; E-Pemda Bali 2022 | Sewaka Dharma</p>
    </div>
  </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>