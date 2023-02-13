<?php 
// include_once('ketnoi.php');
	if (isset($_POST['submit'])) {
		if($_POST['mk_moi'] == ''){
            $error_mk_moi = '<span style="color:red;">(*)</span>';
        }
        else{
            $mk_moi = $_POST['mk_moi'];
        }
        if($_POST['confirm'] == ''){
            $error_confirm = '<span style="color:red;">(*)</span>';
        }
        else{
            $confirm = $_POST['confirm'];
        }
        if ($_POST['mk_hien_tai'] == '') {
        	$error_mk_hien_tai = '<span style="color:red;">(*)</span>';
        }
        else{
        	$mk_hien_tai = $_POST['mk_hien_tai'];
        }
	}
	$tai_khoan = $_SESSION['tk'];
	$sql = "SELECT * FROM thanhvien WHERE tai_khoan like '%$tai_khoan%'";
	$query = mysqli_query($dbConnect, $sql);
    $row = mysqli_fetch_array($query);
    if ( isset($mk_moi) && isset($confirm)){ 
        if($mk_moi == $confirm)
         {
		$sql = " UPDATE thanhvien SET mat_khau = '$mk_moi' WHERE tai_khoan = '$tai_khoan' ";
		$query = mysqli_query($dbConnect, $sql);
		header('location:trangchu.php?page_layout=taikhoan');	
    }
    else
    {
        $error_mk_hien_tai = '<span style="color:red;">Mất khẩu mới và mật khẩu nhập lại không trùng nhau</span>';
    }
}
?>
<div class="formmatkhau">
	<form method="POST" enctype="multipart/form-data">
		<div class="chitiettrai2">Đổi mật khẩu</div>
		<br>
		<div class="chitiettrai"><a>Mật khẩu hiện tại</a></div><input class="hientai" type="password" name="mk_hien_tai" id="mk_hien_tai"><?php if(isset($error_mk_hien_tai)){echo$error_mk_hien_tai;}?>
		<br>
		<div class="chitiettrai"><a>Mật khẩu mới</a></div><input class="moi" type="password" name="mk_moi" id="mk_moi"><?php if(isset($error_mk_moi)){echo$error_mk_moi;}?>
		<br>
		<div class="chitiettrai"><a>Nhập lại mật khẩu mới</a></div><input class="nhaplai" type="password" name="confirm" id="confirm"><?php if(isset($error_confirm)){echo$error_confirm;}?>
        <br>
        <div class="pw"><?php if(isset($error_pw)){echo$error_pw;}?></div>
        <br>
		<input class="xacnhan" type="submit" name="submit" value="Xác nhận"/>
	</form>
</div>
