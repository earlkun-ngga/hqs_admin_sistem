<?php session_start(); ?>
<?php if($_SESSION['user']['username'] == null) { header('Location:lamanlogin.php'); } ?>


<?php include "template/header.php"; ?>
<?php include "koneksi.php" ?>

<?php 



	$idproduk = $_GET['idproduk'];
	$queri = mysqli_query($con, "SELECT * FROM tbl_produk WHERE id_produk = '".$idproduk."'");

	while($data = mysqli_fetch_array($queri)){ 
	
		$idproduk = $data['id_produk'];
		$nama_produk =  $data['nama_produk'];
		$harga_satuan =  $data['harga'];
		$jumlah_stok = $data['jumlah_stok'];
		$satuan =  $data['satuan']; 
		$path_gambar = $data['file_foto_produk'];
	}
 ?>





<div class="ml-5 mt-5" style="width: 70%;">
<center>
<h2>Detail Barang | <a href="index.php" class="btn btn-success"> <font size="+1">Kembali</font> </a></h2>
</center>
<hr>

<?php 
error_reporting(0);
if($_SESSION['flag1'])
{ ?>

	<div style="height: 6%;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat !</strong> Data Berhasil di ubah !!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
unset($_SESSION['flag1']);

 } elseif($_SESSION['flag2']) { ?>


	<div style=" height: 6%;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Gambar Berhasil di Perbarui !</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


 <?php unset($_SESSION['flag2']); } ?>


	<table>
		
	<tr>
		<td><img style="width: 400px; height: 400px;" src="http://localhost/hqstudiost/user_page/assets/img/produk/<?= $path_gambar; ?>"></td>
		<br>
	


		<td>
				
		<form action="proses_update_produk.php" method="post">
			 <b>ID Produk</b>	
				 <input type="text" name="id_produk" value="<?= $idproduk; ?>" style="width: 450px;" class="form-control" disabled> 

				 <input type="hidden" name="id_produk_hide" value="<?= $idproduk; ?>"> 
				 <br>
			 	<b>Nama Produk</b>	
				 <input type="text" name="nama_produk" style="width: 450px;" class="form-control" value="<?= $nama_produk; ?>"> 
				 <br>
				 <b>Harga Satuan</b>	
				 <input type="text" name="harga_satuan" style="width: 450px;" value="<?= $harga_satuan; ?>" class="form-control"> 
				 <br>
				 <b>Sisa Stok</b>	
				 <input type="text" name="sisa_stok" style="width: 100px;" value="<?= $jumlah_stok; ?>" class="form-control"> 
				 <br>
				 <b>Jenis Satuan</b>	
				 <input type="text" name="jenis_satuan" style="width: 100px;" value="<?= $satuan; ?>" class="form-control"> 
				 <br>
				 <center><input type="submit" value="edit" class="btn btn-success"></center>
	 	</form>


		</td>
	</tr>

	<tr>
		<td>
			<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ubah Gambar
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Gambar Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post"  enctype="multipart/form-data" action="proses_ganti_gambar.php">

      <input type="hidden" name="idbarang" value="<?= $_GET['idproduk']; ?>">
      <input type="file" class="form-control" name="file_foto_produk"/>
      </div>
      <div class="modal-footer">
       
        <input type="submit" value="Simpan" class="form-control">


        </form>
      </div>
    </div>
  </div>
</div>


		</td>
		<td></td>
	</tr>

	</table>
	 

</div>

</div>  
<!-- row -->
<?php include "template/footer.php"; ?>