<?php 
include 'fungsi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM laporan WHERE id='$id'")or die(mysqli_error());
 
header("location:laporanadmin.php?pesan=hapus");
?>