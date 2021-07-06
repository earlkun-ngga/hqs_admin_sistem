<?php session_start(); ?>
<?php if($_SESSION['user']['username'] == null) { header('Location:lamanlogin.php'); } ?>

<?php include "template/header.php"; ?>
<?php include "koneksi.php" ?>

<?php 

	$queri = mysqli_query($con, "SELECT * FROM tbl_produk ORDER BY id_produk DESC");

 ?>


<div class="ml-5 mt-5" style="width: 70%;">
<center>
<h2>Manage Produk yang akan di jual</h2>
</center>
<hr>

<?php 
error_reporting(0);
if($_SESSION['flag'])
{ ?>

	<div style="height: 6%;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat !</strong> Data Produk berhasil di tambah !!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 <?php unset($_SESSION['flag']);} 

 else if($_SESSION['flaghapus']) {

  ?> 



<div style="height: 6%;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat !</strong> Data Produk berhasil di Hapus
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php unset($_SESSION['flaghapus']); } ?>


<h3>Tambah Produk Baru :
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  <font size="+1">+</font>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Produk Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post"  enctype="multipart/form-data" action="proses_buat_produk.php">

      <h5>Nama Produk</h5>
      <input type="text" class="form-control" name="nama_produk"><br>

      <h5>Harga Satuan</h5>
      <input type="text" class="form-control" name="harga_satuan"><br>
       <h5>Jenis Satuan</h5>
      <input type="text" class="form-control" name="jenis_satuan" style="width: " placeholder="Pcs, Lembar, Kg"><br>
      <h5>Jumlah Stok Awal</h5>
      <input type="text" class="form-control" name="stok_awal" style="width: 30%;"><br>
    	<br>
    	<h5>Foto Produk (Maks 20MB, dan Format .jpg)</h5>
      <input type="file" class="form-control" name="file_foto_produk"/>
      </div>
      <div class="modal-footer">
       
        <input type="submit" value="Simpan" class="btn btn-success">


        </form>
      </div>
    </div>
  </div>
</div>




<br>
<h3>Daftar Produk</h3>
<br>
<table class="table">
	<tr>
		<td><b>ID Produk</b></td>
		<td><b>Nama Produk</b></td>
		<td><b>Harga Satuan</b></td>
		<td><b>Jumlah Stok</b></td>
		<td><b>Aksi</b></td>
	</tr>

	<?php foreach ($queri as $qwr){ ?>
		<tr>
		<td><?= $qwr['id_produk']; ?></td>
		<td><?= $qwr['nama_produk']; ?></td>
		<td><?= $qwr['harga']; ?></td>
		<td><?= $qwr['jumlah_stok']; ?></td>
		<td><a href="edit_detail_produk.php?idproduk=<?= $qwr['id_produk']; ?>" class="badge badge-warning"><font color="white">Ubah</font></a> <a href="hapus_produk.php?idproduk=<?= $qwr['id_produk']; ?>" class="badge badge-danger"><font color="white">Hapus</font></a></td>
	</tr>
	<?php } ?>



</table>

</div>


</div>  
<!-- row -->
<?php include "template/footer.php"; ?>