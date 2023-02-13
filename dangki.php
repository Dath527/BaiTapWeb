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
		$sql = "INSERT INTO thanhvien(tai_khoan, mat_khau, sdt, name, diachi, quyen_truy_cap)
				VALUES ('$tai_khoan', '$mat_khau', '$phone', '$name', '$address', '0')";
		$query = mysqli_query($dbConnect,$sql);
		echo '<script language="javascript">alert("Đăng kí thành công"); window.location="trangchu.php?page_layout=dangnhap";</script>';
		
	}
    
	

?>

<form method="post" enctype="multipart/form-data">
	<div class="formdangki">
		<div class="chitiettrai">Tài khoản</div>
		<div class="chitietphai"><input class="tk"type="text" name="tai_khoan"></div>
			<?php if(isset($error_tai_khoan)){echo$error_tai_khoan;}?>
			<br/>
		<div class="chitiettrai">Mật khẩu</div>
		<div class="chitietphai"><input class="mk"type="password" name="mat_khau"></div>
			<?php if(isset($error_mat_khau)){echo$error_mat_khau;}?>
			<br/>
		<div class="chitiettrai">Số điện thoại</div>
		<div class="chitietphai"><input class="sdt"type="text" name="phone"></div>
			<?php if(isset($error_phone)){echo$error_phone;}?>
			<br/>
		<div class="chitiettrai">Họ tên</div>
		<div class="chitietphai"><input class="ht"type="text" name="name"></div>	
       		<?php if(isset($error_name)){echo$error_name;}?>
			<br/>
		<div class="chitiettrai">Địa chỉ</div>
		<div class="chitietphai"><input class="dc" type="text" name="address"></div>
			<?php if(isset($error_address)){echo$error_address;}?>
			<br/>
		<input class="dk" type="submit" name="submit" value="Đăng kí">	
	</div>
</form>