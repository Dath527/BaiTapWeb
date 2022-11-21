 <?php
    //bẫy lỗi để trống thông tin
    if(isset($_POST['submit'])){
    if($_POST['ten_sp'] == ''){
        $error_ten_sp = '<span style="color:red;">(*)<span>';
    }
    else{
        $ten_sp = $_POST['ten_sp'];
    }
    if($_POST['gia_sp'] == ''){
        $error_gia_sp = '<span style="color:red;">(*)<span>';
    }
    else{$gia_sp = $_POST['gia_sp'];
    }
    if($_POST['so_luong'] == ''){
        $error_so_luong = '<span style="color:red;">(*)<span>';
    }
    else{$so_luong = $_POST['so_luong'];
    }
    // if($_POST['bao_hanh'] == ''){
    //     $error_bao_hanh = '<span style="color:red;">(*)<span>';
    // }
    // else{
    //     $bao_hanh = $_POST['bao_hanh'];
    // }
    // if($_POST['phu_kien'] == ''){
    //     $error_phu_kien = '<span style="color:red;">(*)<span>';
    // }
    // else{
    //     $phu_kien = $_POST['phu_kien'];
    // }
    // if($_POST['tinh_trang'] == ''){
    //     $error_tinh_trang = '<span style="color:red;">(*)<span>';
    // }
    // else{
    //     $tinh_trang = $_POST['tinh_trang'];
    // }
    // if($_POST['khuyen_mai'] == ''){
    //     $error_khuyen_mai = '<span style="color:red;">(*)<span>';
    // }
    // else{
    //     $khuyen_mai = $_POST['khuyen_mai'];
    // }
    // if($_POST['trang_thai'] == ''){
    //     $error_trang_thai = '<span style="color:red;">(*)<span>';
    // }
    // else{
    //     $trang_thai = $_POST['trang_thai'];
    // }
    // if($_POST['chi_tiet_sp'] == ''){
    //     $error_chi_tiet_sp = '<span style="color:red;">(*)<span>';
    // }
    // else{
    //     $chi_tiet_sp = $_POST['chi_tiet_sp'];
    // }
    if($_FILES['anh_sp']['name'] == ''){
        $error_anh_sp = '<span style="color:red;">(*)<span>';
    }
    else{
        $anh_sp = $_FILES['anh_sp']['name'];$tmp = $_FILES['anh_sp']['tmp_name'];
    }
    if($_POST['comment'] == ''){
        $error_comment = '<span style="color:red;">(*)<span>';
    }
    else{
        $comment = $_POST['comment'];
    }
    if($_POST['id_dm'] == 'unselect'){
        $error_id_dm = '<span style="color:red;">(*)<span>';
    }
    else{
        $id_dm = $_POST['id_dm'];
    }
        // $dac_biet = $_POST['dac_biet'];
    }
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/themsp.css">
</head>
<body>
    <header>
        <div class="menu">
            <ul>
                <li style="margin: 0; width: 10%;"><div class="beephone"><img width="70px" height="70px" src="images/beephone.png" alt="logo" >
                <a  href="">Bee<span>Phone</span></a></div></li>
                <li><div class="tab"><a href="">Thành viên</a></div></li>
                <li><div class="tab" id="dienthoaibtn"><a href="">Điện thoại</a></div>
                    <div class="box">
                    <ul class="sub-menu" id="dienthoaimenu">
                        <li><div class="tabbox"><a href="">Iphone</a></div></li>
                        <li><div class="tabbox"><a href="">Samsung</a></div></li>
                        <li><div class="tabbox"><a href="">Oppo</a></div></li>
                        <li><div class="tabbox"><a href="">Xiaomi</a></div></li>
                        <li><div class="tabbox"><a href="">Realme</a></div></li>
                        <li><div class="tabbox"><a href="">Vivo</a></div></li>
                        <li><div class="tabbox"><a href="">Nokia</a></div></li>
                    </ul>
                    </div>
                </li>
                <li><div class="tab" id="laptopbtn"><a href="">Laptop</a></div>
                    <div class="box">
                    <ul class="sub-menu" id="laptopmenu">
                        <li><div class="tabbox"><a href="">Macbook</a></div></li>
                        <li><div class="tabbox"><a href="">Asus</a></div></li>    
                        <li><div class="tabbox"><a href="">HP</a></div></li>
                        <li><div class="tabbox"><a href="">Dell</a></div></li>
                        <li><div class="tabbox"><a href="">Acer</a></div></li>
                        <li><div class="tabbox"><a href="">Lenovo</a></div></li>
                    </ul>
                    </div>
                </li>
                <li><div class="tab" id="maytinhbangbtn"><a href="">Máy tính bảng</a></div>
                    <div class="box">
                    <ul class="sub-menu" id="maytinhbangmenu">
                        <li><div class="tabbox"><a href="">Ipad</a></div></li>
                        <li><div class="tabbox"><a href="">Samsung</a></div></li>
                        <li><div class="tabbox"><a href="">Xiaomi</a></div></li>
                        <li><div class="tabbox"><a href="">Lenovo</a></div></li>
                        <li><div class="tabbox"><a href="">Oppo</a></div></li>
                    </ul>
                    </div>
                </li>
                <li><div class="tab" id="phukienbtn"><a href="">Phụ kiện</a></div>
                    <div class="box">
                    <ul class="sub-menu" id="phukienmenu">
                        <li><div class="tabbox"><a href="">Tai nghe</a></div></li>
                        <li><div class="tabbox"><a href="">Loa</a></div></li>
                        <li><div class="tabbox"><a href="">Cáp, sạc</a></div></li>
                        <li><div class="tabbox"><a href="">Pin dự phòng</a></div></li>
                        <li><div class="tabbox"><a href="">Các phụ kiện khác</a></div></li>
                    </ul>
                    </div>
                </li>
                <li style="width: 220px;"><div><input placeholder="Tìm kiếm" type="text" class="timkiem"></div></li>
                <li><div class="tab"><a href="">Giỏ hàng</a></div></li>
                <li><div class="tab"><a href="">Đăng nhập</a></div></li>
            </ul>

        </div>
    </header>
    <div class="body">
        <div class="container">
            <h1><a class="title">Thêm Điện Thoại</a></h1>
            <form>
                <div class="form">
                        <a>Tên sản phẩm </a>
                    <br>
                        <input type="text" name="tensp" id="tensp">
                        <?php if(isset($error_ten_sp)){echo$error_ten_sp;}?>
                    <br>
                        <a> Giá sản phẩm </a>
                    <br>
                        <input type="number" name="giasp" id="giasp">
                        <?php if(isset($error_gia_sp)){echo$error_gia_sp;}?>
                    <br>
                        <a> Nhà cung cấp </a>
                    <br>
                        <input type="text" name="nhacc" id="nhacc">
                    <br>
                        <a> Ảnh sản phẩm </a>
                    <br>
                        <input type="file" name="anhsp" id="anhsp">
                        <?php if(isset($error_anh_sp)){echo $error_anh_sp;}?>
                    <br>
                        <a> Số lượng </a>
                    <br>
                        <input type="number" name="soluong" id="soluong">
                        <?php if(isset($error_so_luong)){echo $error_so_luong;}?>
                    <br>
                        <a> Comment </a>
                    <br>
                        <Textarea></Textarea>
                        <?php if(isset($error_comment)){echo $error_comment;}?>
                    <br>
                        <input class="button" type="submit" name="submit" value="Thêm mới" />
                        <input class="button" type="reset" name="reset" value="Làm mới" />
                </div>
            </form>
        </div>
    </div>
    <?php
include_once('ketnoi.php');
if(isset($ten_sp) && isset($gia_sp)  && isset($anh_sp) && isset($id_dm) && isset($comment) && isset($so_luong)){
   move_uploaded_file($tmp, 'anh/'.$anh_sp);
   $sql = "INSERT INTO sanpham(ten_sp, gia_sp, anh_sp, id_dm, so_luong, comment)
           VALUES('$ten_sp', '$gia_sp', '$anh_sp', '$id_dm','$so_luong' , '$comment')";
   $query = mysqli_query($dbConnect, $sql);
   header('location:trangchu.html?page_layout=dienthoai');
}
?>
    <footer>
        <div class="footer">
            <ul>
                <li>
                    <h2>Đây là bài thực hành thiết kế web của nhóm 11</h2>
                    <p>Vũ Tiến Đạt, Lê Đức Thuận, Nguyễn Thế Bảo</p>
                    <p>Nguyễn Thị Như Quỳnh, Nguyễn Minh Quân</p>
                    <p>Bản Quyền thuộc về nhóm 11 - 71DCTT22</p>
                </li>
                <li>
                    <img src="images/utt.png" alt="logo utt" class="logo-footer">
                </li>   
        </div>
    </footer>
    <script>
                                                                    //Dien thoai Hover
        const el = document.getElementById('dienthoaibtn');

const hiddenEl = document.getElementById('dienthoaimenu');

el.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl.style.display = 'block';
});

hiddenEl.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl.style.display = 'none';
});

el.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl.style.display = 'none';
});

hiddenEl.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl.style.display = 'block';
});

const el2 = document.getElementById('laptopbtn');
                                                                    //Laptop Hover
const hiddenEl2 = document.getElementById('laptopmenu');

el2.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl2.style.display = 'block';
});

hiddenEl2.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl2.style.display = 'none';
});

el2.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl2.style.display = 'none';
});

hiddenEl2.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl2.style.display = 'block';
});
                                                                    //May tinh bang Hover
const el3 = document.getElementById('maytinhbangbtn');

const hiddenEl3 = document.getElementById('maytinhbangmenu');

el3.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl3.style.display = 'block';
});

hiddenEl3.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl3.style.display = 'none';
});

el3.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl3.style.display = 'none';
});

hiddenEl3.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl3.style.display = 'block';
});
                                                                    //Phu kien Hover
const el4 = document.getElementById('phukienbtn');

const hiddenEl4 = document.getElementById('phukienmenu');

el4.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl4.style.display = 'block';
});

hiddenEl4.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl4.style.display = 'none';
});

el4.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl4.style.display = 'none';
});

hiddenEl4.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl4.style.display = 'block';
});
    </script>
</body>
</html>