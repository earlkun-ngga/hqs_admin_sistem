<?php include "koneksi.php" ?>

<?php include "template/header.php"; ?>

<center>
<br>
<h2>Produk yang Kami Jual</h2>
<hr style="width: 60%;">

<div class="container">
	<div class="row mt-1">


		<?php 

		$queri = mysqli_query($con, "SELECT * FROM tbl_produk");

		while($data = mysqli_fetch_array($queri))

		{
		 ?>

	<div class="col-xl-4">
		<div class="card" id="cardeffect" style="width: 18rem;">
		  <img class="card-img-top" src="assets/img/produk/<?= $data['file_foto_produk']; ?>" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <p class="card-text">
		    	<font size="+1"><?= $data['nama_produk']; ?></font>
		    	<hr>
		    	<br>
		    	Idr.<?= $data['harga']; ?> <br>
		    	Sisa Stok : <?= $data['jumlah_stok']; ?><br>
		    </p>
		    <a href="https://api.whatsapp.com/send?phone=628561678671&text=Halo%20HQStudio%20and%20Stationary,%20Saya%20Ingin%20Membeli%20<?= $data['nama_produk']; ?>" class="btn btn-primary">Beli Sekarang</a>
		  </div>
		</div>

	</div>
	
	<?php  } ?>

	</div>
</div>

</center>


<?php include "template/footer.php"; ?>