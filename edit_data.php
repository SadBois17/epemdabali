<?php
// session_start();	
include 'fungsi.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<title>E-Pemda Bali</title>
<meta charset="utf-8">
<noscript>
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
        	<h1>Edit Laporan</h1>
        </div>
	<?php	 
		$id = $_GET['id'];
		$query_mysqli = mysqli_query($koneksi,"SELECT * FROM laporan WHERE id='$id'")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysqli)){
	?>
		<form action="edit_data.php" method="post">		
		<table>
			<tr>
				<td>Laporan</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<textarea name="text" value="<?php echo $data['text'] ?>"></textarea>
				</td>					
			</tr>		
			<tr>
				<td></td>
				<td><button name="simpan" id="simpan" type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	<?php } ?> 
    <?php 
		if(isset($_POST['simpan'])){
		$id = $_POST['id'];
		$text = $_POST['text'];
		
		mysqli_query($koneksi,"UPDATE laporan SET text='$text' WHERE id='$id'");
		
		header("location:laporanpegawai.php?pesan=update");
		}
	?>
</div>
</div>
<div class="5grid-layout" id="copyright">
  <div class="row">
    <div class="12u">
      <p>&copy; Your Site Name | Images: <a href="http://fotogrph.com/">Fotogrph</a> | Design: <a href="http://html5templates.com/">HTML5Templates.com</a></p>
    </div>
  </div>
</div>
</body>
</html>