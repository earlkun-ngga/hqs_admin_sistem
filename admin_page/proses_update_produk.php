<?php 

	include "koneksi.php";
	session_start();

	$query1 = mysqli_query($con, "UPDATE tbl_produk SET nama_produk = '".$_POST['nama_produk']."' WHERE id_produk = '".$_POST['id_produk_hide']."'");

	$query2 = mysqli_query($con, "UPDATE tbl_produk SET jumlah_stok = '".$_POST['sisa_stok']."' WHERE id_produk = '".$_POST['id_produk_hide']."'");

	$query3 = mysqli_query($con, "UPDATE tbl_produk SET satuan = '".$_POST['jenis_satuan']."' WHERE id_produk = '".$_POST['id_produk_hide']."'");

	$query4 = mysqli_query($con, "UPDATE tbl_produk SET harga = '".$_POST['harga_satuan']."' WHERE id_produk = '".$_POST['id_produk_hide']."'");



		$_SESSION['flag1'] = "true";
		 header('Location:edit_detail_produk.php?idproduk=' . $_POST['id_produk_hide']);


		 








 ?>