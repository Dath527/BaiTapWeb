<?php
	$id_sp = $_GET['id_sp'];
    echo $id_sp;
    echo $_SESSION['cart']['$id_sp'];
		unset($_SESSION['cart'][$_GET['id_sp']]);
		// header('location: trangchu.php?page_layout=giohang');
?>