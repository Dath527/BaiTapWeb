<?php
	$id_sp = $_GET['id_sp'];
		$sql = "DELETE FROM sanpham WHERE id_sp = $id_sp ";
		$query = mysqli_query($dbConnect, $sql);
		header('location: trangchu.php?page_layout=dienthoai');

?>