<?php
		unset($_SESSION['cart'][$_GET['id_sp']]);
        header('location: trangchu.php?page_layout=giohang');
?>