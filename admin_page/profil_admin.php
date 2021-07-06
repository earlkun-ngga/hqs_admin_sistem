<?php session_start(); ?>
<?php if($_SESSION['user']['username'] == null) { header('Location:lamanlogin.php'); } ?>



<?php include "template/header.php"; ?>
<?php include "koneksi.php" ?>




<div class="ml-5 mt-5" style="width: 70%;">
<center>
<h2>Profil Mu</h2>
</center>
<hr>

<center>
<div class="card px-2 py-2" style="width: 50%;">
<br>
<h4><?= $_SESSION['user']['nama_panjang']; ?></h4>
<hr>
<table>
	<center>
	<tr><td><b>Username</b></td><td>: <?= $_SESSION['user']['username']; ?></td></tr>
	<tr><td><b>No HP</b></td><td>: <?= $_SESSION['user']['no_hp']; ?></td></tr>
	<tr><td><b>Role (Sebagai)</b></td><td>: <b><i>Admin</i></b></td></tr>
	<tr><td><b>Status Akun</b></td><td>: <div class="badge badge-success">Aktif</div></td></tr>
	
</table>



</div>
</center>


<br>

<br>


</table>

</div>


</div>  
<!-- row -->
<?php include "template/footer.php"; ?>