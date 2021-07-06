<!DOCTYPE html>
<html>
<head>

	<title>HQStudio & Stationary</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		

		#cardeffect {
	margin: 0px 0px 35px 0px;
	padding: 0 0 15px 0px;
	border-radius: 5px;
	overflow: hidden;
	background: #fff;
	-moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
	-o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
	transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}


		#cardeffect:hover {
	-webkit-transform: translate(0, -4px);
	-moz-transform: translate(0, -4px);
	-ms-transform: translate(0, -4px);
	-o-transform: translate(0, -4px);
	transform: translate(0, -4px);
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
}


	#sideBar{

		width: 300px;
		background-color: white;
		height: 1000px;
		box-shadow: 2px 1px 5px 0px rgba(171,171,171,0.75);
		padding-left: 10px;
	}

	</style>

</head>
<body>

	<nav class="navbar navbar-expand-lg" style="background-color: #60ff3b; color: white;" >

	  <a class="navbar-brand" href="#"><font color="white"><b><u>HQ Studio & Stationary</u></b></font></a>
	  [Admin Page]
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  
	</nav>

<div class="row">
<div id="sideBar">
<br>
<br>
<b><center>Selamat Datang : </b><?= $_SESSION['user']['username']; ?></center>
<br>
<center>
<a href="index.php"><div  class="card" id="cardeffect" style="text-decoration: 0; width: 90%; background-color: white; height: 60px;" >
<font color="black"><i class="bi-box"></i></font>
<b><font color="black">Manage Produk</font></b>
</div>
</a>

<a href="cetak_foto_pelanggan.php"><div  class="card" id="cardeffect" style="text-decoration: 0; width: 90%; background-color: white; height: 60px;" >
<font color="black"><i class="bi-camera2"></i></font>
<b><font color="black">Cetak Foto Pelanggan</font></b>
</div>
</a>


<a href="profil_admin.php"><div  class="card" id="cardeffect" style="text-decoration: 0; width: 90%; background-color: white; height: 60px;" >
<font color="black"><i class="bi-person-badge-fill"></i></font>
<b><font color="black">Profil Admin</font></b>
</div>
</a>


<a href="logout.php"><div  class="card" id="cardeffect" style="text-decoration: 0; width: 90%; background-color: white; height: 60px;" >
<font color="black"><i class="bi-key-fill"></i></font>
<b><font color="black">Logout</font></b>
</div>
</a>


</div>

