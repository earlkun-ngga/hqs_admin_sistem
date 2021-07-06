<?php 
session_start();
include "koneksi.php";
	
	

	$queri = mysqli_query($con, "DELETE FROM tbl_produk WHERE id_produk = '".$_GET['idproduk']."' ");

	$_SESSION['flaghapus'] = "true";
	header('Location:index.php');




 ?>