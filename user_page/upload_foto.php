<?php include "koneksi.php" ?>

<?php include "template/header.php"; ?>

<center>
<br>
<h2>Silahkan Upload Foto Anda</h2>
<hr style="width: 60%;">

<?php 
error_reporting(0);
session_start();
if($_SESSION['flag1'])
{ ?>

	<div style="width: 60%;" class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Maaf !</strong> File terlalu besar (MAKSIMAL 20MB).
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
session_destroy();

 } elseif ($_SESSION['flag2']) { ?>

 	<div style="width: 60%;" class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Maaf !</strong> Ini Bukan File Foto.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


 <?php 
session_destroy();

} elseif($_SESSION['flag3']) { ?>


	<div style="width: 60%;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Foto Berhasil di Upload !</strong> Silahkan tunggu admin memprosesnya :).
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


 <?php session_destroy(); } ?>
<form action="proses_upload_foto.php" method="post" enctype="multipart/form-data">


	<input type="file" name="file_foto" class="form-control" style="width: 50%;" />
	<br>
	<input type="text" class="form-control" required name="nama_pelanggan" placeholder="Masukan Nama Anda" style="width: 50%;">
	<br>
	<input type="text" class="form-control" required name="no_hp" placeholder="Masukan NO HP (Whatsapp)" style="width: 50%;">
	<br>
	<input type="submit" value="Kirim" class="btn btn-success" />

</center>


<?php include "template/footer.php"; ?>