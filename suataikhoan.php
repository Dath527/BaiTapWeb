<?php
	if (isset($_POST['submit'])) {
		if ($_POST['sdt'] =='') {
			$error_sdt = '<span style="color:red;">(*)<span/>'; 
		}
		else {
			$sdt = $_POST['sdt'];
		}
		if ($_POST['name'] =='') {
			$error_name = '<span style="color:red;">(*)<span/>'; 
		}
		else {
			$name = $_POST['name'];
		}
		if ($_POST['diachi'] =='') {
			$error_diachi = '<span style="color:red;">(*)<span/>'; 
		}
		else {
			$diachi = $_POST['diachi'];
		}
	}
		$tai_khoan = $_SESSION['tk'];
		$sql = "SELECT * FROM thanhvien WHERE tai_khoan like '%$tai_khoan%'";
    	$query = mysqli_query($dbConnect,$sql);
		$row = mysqli_fetch_array($query);
		// $sqlTv = "SELECT * FROM thanhvien";
		// $queryTv = mysqli_query($dbConnect,$sqlTv);
		if( isset($sdt) && isset($name) && isset($diachi))
		{
			$sql = "UPDATE thanhvien SET sdt = '$sdt', name = '$name', diachi = '$diachi'
					WHERE tai_khoan like '%$tai_khoan%'";
			$query = mysqli_query($dbConnect,$sql);
			header('location:trangchu.php?page_layout=taikhoan');
		}

?>
<div class="formmatkhau">
	<form method="POST" enctype="multipart/form-data">
		<div class="chitiettrai2">Thông tin người dùng</div>
		<br>
		<div class="chitiettrai"><a>Họ và tên</a></div><input class="hoten" type="text" name="name" id="name" value="<?php if(isset($_POST['name'])){echo $row['name'];} else{echo $row['name'];} ?>" /><?php if(isset($error_mk_hien_tai)){echo$error_mk_hien_tai;}?>
		<br>
		<div class="chitiettrai"><a>Số điện thoại</a></div><input class="sdt" type="text" name="sdt" id="sdt" value="<?php if(isset($_POST['sdt'])){echo $row['sdt'];} else{echo $row['sdt'];} ?>" /><?php if(isset($error_mk_moi)){echo$error_mk_moi;}?>
		<br>
		<div class="chitiettrai"><a>Địa chỉ</a></div><input class="diachi" type="text" name="diachi" id="diachi" value="<?php if(isset($_POST['diachi'])){echo $row['diachi'];} else{echo $row['diachi'];} ?>" /><?php if(isset($error_confirm)){echo$error_confirm;}?>
        <br>
        <div class="pw"><?php if(isset($error_pw)){echo$error_pw;}?></div>
        <br>
		<input class="xacnhan" type="submit" name="submit" value="Xác nhận"/>
	</form>
</div>