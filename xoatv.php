<?php
	require('ketnoi.php');
		$tk = $_GET['tk'];
		$sql = "DELETE FROM thanhvien WHERE tai_khoan = '$tk' ";
		$query = mysqli_query($dbConnect, $sql);
		header('location: admin.php?page_layout=thanhvien');

?>