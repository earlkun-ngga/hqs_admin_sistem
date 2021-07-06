<?php 

	session_start();
	include "koneksi.php";



	$userinput = $_POST['username'];
	$passinput = $_POST['password'];
	$queri = mysqli_query($con, "SELECT * FROM tbl_admin WHERE username = '".$userinput."'");


	while($databener = mysqli_fetch_array($queri))
	{
		$userbener = $databener['username'];
		$passbener = $databener['password'];

		$akun = $databener;
	}



	if($userinput == $userbener && $passinput == $passbener)
	{

		$_SESSION['user'] = $akun;
		header('Location:index.php');
		
	}else {

		$_SESSION['flag'] = $true;
		header('Location:lamanlogin.php');
	}

 ?>