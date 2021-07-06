<?php 


	$newname = 'trash_' . substr(md5(rand()), 3, 5) .  '.jpg';

	echo $newname;

	rename($_SERVER['DOCUMENT_ROOT'] . '/hqstudiost/user_page/assets/img/produk/jujup.jpg', $_SERVER['DOCUMENT_ROOT'] . '/hqstudiost/user_page/assets/img/produk/' . $newname );

	$_SESSION['flag4'] = "true";
		 header('Location:edit_detail_produk.php?idproduk=' . $idbarang);

 ?>