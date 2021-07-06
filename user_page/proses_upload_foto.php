<?php 

	date_default_timezone_set('Asia/Bangkok');

	include "koneksi.php";

	session_start();
	var_dump($_POST);
	echo "<br>";
	var_dump($_FILES['file_foto']);
	$ext = end(explode('.', $_FILES["file_foto"]["name"]));
	echo "<br>";
	echo $ext;
	if($_FILES['file_foto']['size'] > 20000000)
	{
		
		$_SESSION['flag1'] = "true";
		 header('Location:upload_foto.php');

	}elseif($_FILES['file_foto']['type'] != 'image/jpeg')
	{

		
		$_SESSION['flag2'] = "true";
		 header('Location:upload_foto.php');
	} else {



	$nama_file_lama = $_FILES['file_foto']['name'];
	$nama_file_baru = $_POST['no_hp']."_".substr(md5(rand()), 3,7).'.'.$ext;
	$destiny = 'foto_pelanggan/' . $nama_file_baru;
	$waktu_upload = date('d - M - Y H:i:s');
	move_uploaded_file($_FILES['file_foto']['tmp_name'], $destiny);


	$query = mysqli_query($con, "INSERT INTO tbl_foto VALUES ('', '".$nama_file_baru."', '".$_POST['nama_pelanggan']."','".$_POST['no_hp']."', '".$waktu_upload."')");
		
		$_SESSION['flag3'] = "true";
		 header('Location:upload_foto.php');

	}


 ?>