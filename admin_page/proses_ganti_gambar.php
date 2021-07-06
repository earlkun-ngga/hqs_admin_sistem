<?php 

	include "koneksi.php";
	session_start();

	if($_FILES['file_foto_produk']['size'] < 20000000 && $_FILES['file_foto_produk']['type'] == 'image/jpeg')
	{


		echo "berhasil !<br>";
		var_dump($_FILES['file_foto_produk']);

		$idbarang = $_POST['idbarang'];

		$ext = explode('.', $_FILES['file_foto_produk']['name']);
		 "<br>";
		 $extension = end($ext);
		 "<br>";
		 $nama_file_baru = 'use' . '_' . substr(md5(rand()), 2, 6).$idbarang.'_'.'.' . $extension;


		

		 $queri2 = mysqli_query($con, "SELECT * FROM tbl_produk WHERE id_produk = '".$idbarang."' ");

		 while($data = mysqli_fetch_array($queri2)) { $namafotolama = $data['file_foto_produk']; }


		 $newname = 'trash_' . substr(md5(rand()), 3, 5) . '_' . $namafotolama;

		echo $newname;

		rename($_SERVER['DOCUMENT_ROOT'] . '/hqstudiost/user_page/assets/img/produk/'. $namafotolama, $_SERVER['DOCUMENT_ROOT'] . '/hqstudiost/user_page/assets/img/produk/' . $newname );


		  

		 move_uploaded_file($_FILES['file_foto_produk']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/hqstudiost/user_page/assets/img/produk/' . $nama_file_baru);

		  $queri = mysqli_query($con, "UPDATE tbl_produk SET file_foto_produk = '".$nama_file_baru."' WHERE id_produk = '".$idbarang."' ");

		  unlink($_SERVER['DOCUMENT_ROOT'] . '/hqstudiost/user_page/assets/img/produk/' . $newname);

		 $_SESSION['flag2'] = "true";
		 header('Location:edit_detail_produk.php?idproduk=' . $idbarang);



	}else {


		$_SESSION['flag2'] = "true";
		header('Location:edit_detail_produk.php?idproduk=' . $idbarang);


	}


 ?>