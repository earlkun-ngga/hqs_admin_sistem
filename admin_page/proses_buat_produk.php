<?php 

	include "koneksi.php";
	session_start();

	if($_FILES['file_foto_produk']['size'] < 20000000 && $_FILES['file_foto_produk']['type'] == 'image/jpeg')
	{


		echo "berhasil !<br>";
		var_dump($_FILES['file_foto_produk']);

		

		$ext = explode('.', $_FILES['file_foto_produk']['name']);
		 "<br>";
		 $extension = end($ext);
		 "<br>";
		 $nama_file_baru = 'use' . '_' . substr(md5(rand()), 2, 6) . '_'.'.' . $extension;



		  

		 move_uploaded_file($_FILES['file_foto_produk']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/hqstudiost/user_page/assets/img/produk/' . $nama_file_baru);

		  $queri = mysqli_query($con, "INSERT INTO tbl_produk VALUES (null, '".$_POST['nama_produk']."', '".$_POST['stok_awal']."', '".$_POST['harga_satuan']."', '".$_POST['jenis_satuan']."', '".$nama_file_baru."') ");

		  $_SESSION['flag'] = "true";
		  header('Location:index.php');



	}else {

		 
		 header('Location:index.php');


	}


 ?>