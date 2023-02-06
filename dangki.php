<?php
	if (isset($_POST['submit'])) {
		if ($_POST['tai_khoan'] =='') {
			$error_tai_khoan = '<span style="color:red;">(*)<span/>'; 
		}
		else {
			$tai_khoan = $_POST['tai_khoan'];
		}
		if ($_POST['mat_khau'] =='') {
			$error_mat_khau = '<span style="color:red;">(*)<span/>'; 
		}
		else {
			$mat_khau = $_POST['mat_khau'];
		}
		if ($_POST['phone'] =='') {
			$error_phone = '<span style="color:red;">(*)<span/>'; 
		}
		else {
			$phone = $_POST['phone'];
		}
		if ($_POST['name'] =='') {
			$error_name = '<span style="color:red;">(*)<span/>'; 
		}
		else {
			$name = $_POST['name'];
		}
		if ($_POST['address'] =='') {
			$error_address = '<span style="color:red;">(*)<span/>'; 
		}
		else {
			$address = $_POST['address'];
		}
		
		$sql = "SELECT * FROM thanhvien WHERE tai_khoan = '$tai_khoan'";
		$result = mysqli_query($dbConnect,$sql);
		if (isset($tai_khoan) && mysqli_num_rows($result) > 0) {
			echo '<script language="javascript">alert("Tài khoản đã tồn tại"); window.location="trangchu.php?page_layout=dangki";</script>';
			die();
		}
		
	}
	if(isset($tai_khoan) && isset($mat_khau) && isset($phone) && isset($name) && isset($address)){
    	echo '<script language="javascript">alert("Đăng kí thành công"); window.location="trangchu.php?page_layout=dangnhap";</script>';
		$sql = "INSERT INTO thanhvien(tai_khoan, mat_khau, phone, name, address, quyen_truy_cap)
				VALUES ('$tai_khoan', '$mat_khau', '$phone', '$name', '$address', '0')";
		$query = mysqli_query($dbConnect,$sql);
		
	}
    
	

?>

<form method="post" enctype="multipart/form-data">
	<div class="formdangki">
		<a>Tài khoản</a><br/>
		<input type="text" name="tai_khoan" id="tai_khoan" />
		<?php if(isset($error_tai_khoan)){echo$error_tai_khoan;}?>
		<br/>
		<a>Mật khẩu</a><br/>
		<input type="password" name="mat_khau" id="mat_khau" />
		<?php if(isset($error_mat_khau)){echo$error_mat_khau;}?>
		<br/>
		<a>Số điện thoại</a><br/>
		<input type="text" name="phone" id="phone" />
		<?php if(isset($error_phone)){echo$error_phone;}?>
		<br/>
		<a> Họ tên</a><br/>
		<input type="text" name="name" id="name" />	
        <?php if(isset($error_name)){echo$error_name;}?>
		<br/>
		<a>Địa chỉ</a><br/>
		<input type="text" name="address" id="address"/>
		<?php if(isset($error_address)){echo$error_address;}?>
		<br/>
		<input type="submit" name="submit" value="Đăng kí"/>	
	</div>
</form>