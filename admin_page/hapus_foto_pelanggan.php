<?php 
		
		include "koneksi.php";

		$idfoto = $_GET['id_foto'];
		$qwrcr = mysqli_query($con, "SELECT * FROM tbl_foto WHERE id_foto = '".$idfoto."'");

		while($daqwr = mysqli_fetch_array($qwrcr))
		{
			$file_gambar = $daqwr['nama_file_foto'];
		}




		unlink($_SERVER['DOCUMENT_ROOT'] . '/hqstudiost/user_page/foto_pelanggan/' . $file_gambar );
		$deleteqwr = mysqli_query($con, "DELETE FROM tbl_foto WHERE id_foto = '".$idfoto."'");


		$_SESSION['flagberhasil'] = "true";
		 header('Location:cetak_foto_pelanggan.php');
 ?>