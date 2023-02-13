<?php
	if (isset($_POST['submit'])) {
		header('location:trangchu.php?page_layout=suatk');
	}
	
	$tai_khoan = $_SESSION['tk'];
	$sql = "SELECT * FROM thanhvien WHERE tai_khoan like '$tai_khoan'";
	$query = mysqli_query($dbConnect ,$sql);
?>
<div class="container">
	<table class="thongtin">
		
		<?php while($row = mysqli_fetch_array($query)){?>
		<td>
				<td colspan="6" class="bentrai"><div class="tieude">Thông tin người dùng</div></td>
					<tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Họ và tên</div></td>
                        <td colspan="5"><div class="chitietphai">: <?php echo $row['name'] ?></div></td>   
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Số điện thoại </div></td>
                        <td colspan="5"><div class="chitietphai">: <?php echo $row['sdt'] ?></div></td>   
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Địa chỉ </div></td>
                        <td colspan="5"><adiv class="chitietphai">: <?php echo $row['diachi']; ?></div></td>
                    </tr>
		<?php  break; } ?>
		</td>
	</table>
	<br>
		<div class="xacnhan" onclick="window.location.href = 'trangchu.php?page_layout=suatk'">Sửa thông tin</div>
</div>