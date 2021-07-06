<?php session_start(); ?>
<?php if($_SESSION['user']['username'] == null) { header('Location:lamanlogin.php'); } ?>



<?php include "template/header.php"; ?>
<?php include "koneksi.php" ?>

<?php 

	$queri = mysqli_query($con, "SELECT * FROM tbl_foto ORDER BY id_foto DESC");

 ?>


<div class="ml-5 mt-5" style="width: 70%;">
<center>
<h2>Cetak Foto Pelanggan</h2>
</center>
<hr>

<?php 
error_reporting(0);
if($_SESSION['flagberhasil'])
{ ?>

	<div style="height: 6%;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat !</strong> Foto pelanggan dan datanya berhasil di hapus !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 <?php unset($_SESSION['flagberhasil']);}  ?>




<br>
<h3>Daftar Foto Pelanggan (Dari Yang Terbaru)</h3>
<br>
<table class="table">
	<tr>
		<td><b>Tanggal Upload</b></td>
		<td><b>Nama Pelanggan</b></td>
		<td><b>Nomor HP / WA</b></td>
		<td><b>File Foto</b></td>
		<td><b>Hubungi Whatsapp</b></td>
		<td>	<b>	Aksi</b></td>
	</tr>

	<?php while($qwr = mysqli_fetch_array($queri)){ ?>

  <?php $newhp = '62'.substr($qwr['no_hp_user'], 0); ?>

		<tr>
		<td><?= $qwr['tgl_kirim']; ?></td>
		<td><?= $qwr['nama_user']; ?></td>
		<td><?= $qwr['no_hp_user']; ?></td>
		<td><a class="btn btn-primary" download="<?= $qwr['nama_file_foto']; ?>" href="http://localhost/hqstudiost/user_page/foto_pelanggan/<?= $qwr['nama_file_foto']; ?>">Unduh</a></td>
		<td><center><a class="btn btn-success" href="https://api.whatsapp.com/send?phone=<?=$newhp; ?>&text=Halo%20Ini%20dari%20HqStudioStationary" class="btn btn-primary">Hubungi</a></center></td>

		<td><a class="btn btn-danger" href="hapus_foto_pelanggan.php?id_foto=<?= $qwr['id_foto']; ?>" >Hapus</a></td>
	</tr>
	<?php } ?>



</table>

</div>


</div>  
<!-- row -->
<?php include "template/footer.php"; ?>