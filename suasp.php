<?php

    //bẫy lỗi để trống thông tin
    if(isset($_POST['submit'])){
        if($_POST['ten_sp'] == ''){
            $error_ten_sp = '<span style="color:red;">(*)</span>';
        }
        else{
            $ten_sp = $_POST['ten_sp'];
        }
        if($_POST['gia_sp'] == ''){

            $error_gia_sp = '<span style="color:red;">(*)</span>';

        }
        else{$gia_sp = $_POST['gia_sp'];
            if ($gia_sp <= 0) {
                $error_gia_sp = '<span style="color:red;">(*)</span>';
            }
        }
        if($_POST['so_luong'] == ''){

            $error_so_luong = '<span style="color:red;">(*)</span>';
        }
        else{$so_luong = $_POST['so_luong'];
        if ($so_luong <= 0) {
                $error_so_luong = '<span style="color:red;">(*)</span>';
            }
        }
        if($_FILES['anh_sp']['name'] == ''){
            $error_anh_sp = '<span style="color:red;">(*)</span>';
        }
        else{
            $anh_sp = $_FILES['anh_sp']['name'];
            $tmp = $_FILES['anh_sp']['tmp_name'];
        }
        if($_POST['comment'] == ''){
            $error_comment = '<span style="color:red;">(*)</span>';

        }
        else{
            $comment = $_POST['comment'];
        }

        if($_POST['id_dienthoai'] == 'unselect'){
            $error_id_dienthoai = '<span style="color:red;">(*)</span>';
        }
        else{
            $id_dienthoai = $_POST['id_dienthoai'];


        }
       
    }
?>
<?php
    include_once('ketnoi.php');
    $id_sp = $_GET['id_sp'];
    $sql = "SELECT * FROM sanpham WHERE id_sp = $id_sp";
    $query = mysqli_query($dbConnect, $sql);
    $row = mysqli_fetch_array($query);
    $sqlDt = "SELECT * FROM dmdienthoai";
    $queryDt = mysqli_query($dbConnect, $sqlDt);
?>
<?php
    include_once('ketnoi.php');
    
    if(isset($ten_sp) && isset($gia_sp)  && isset($anh_sp) && isset($id_dienthoai) 
        && isset($comment) && isset($so_luong) && $so_luong>0 && $gia_sp>0){
        move_uploaded_file($tmp, 'images/'.$anh_sp);

       $sql = "UPDATE sanpham SET id_dienthoai = $id_dienthoai, ten_sp = '$ten_sp', anh_sp = '$anh_sp', gia_sp = '$gia_sp',comment = '$comment', so_luong = '$so_luong' WHERE id_sp = $id_sp";
       $query = mysqli_query($dbConnect, $sql);
       header('location:danhsachsp.php?page_layout=dienthoai');

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

                <a  href="trangchu.php">Bee<span>Phone</span></a></div></li>
                <li><div class="tab"><a href="trangchu.php?page_layout=thanhvien">Thành viên</a></div></li>
                <li><div class="tab" id="dienthoaibtn"><a href="danhsachsp.php?page_layout=dienthoai">Điện thoại</a></div>

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

                <li><div class="tab" id="laptopbtn"><a href="trangchu.php?page_layout=laptop">Laptop</a></div>

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

                <li><div class="tab" id="maytinhbangbtn"><a href="trangchu.php?page_layout=maytinhbang">Máy tính bảng</a></div>
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

                <li><div class="tab" id="phukienbtn"><a href="trangchu.php?page_layout=phukien">Phụ kiện</a></div>

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
            <form method="post" enctype="multipart/form-data">
                <div class="form">
                        <a>Tên sản phẩm</a>
                    <br>
                        <input type="text" name="ten_sp" id="tensp" value="<?php if(isset($_POST['ten_sp'])){echo $row['ten_sp'];} else{echo $row['ten_sp'];} ?>">
                        <?php if(isset($error_ten_sp)){echo$error_ten_sp;}?>
                    <br>
                        <a>Giá sản phẩm</a>
                    <br>    
                        <input type="number" name="gia_sp" id="giasp" value="<?php if(isset($_POST['gia_sp'])){echo $row['gia_sp'];} else{echo $row['gia_sp'];}?>">
                        <?php if(isset($error_gia_sp)){echo$error_gia_sp;}?>
                    <br>    
                        <label>Nhà cung cấp</label><br>
                        <select name="id_dienthoai">
                            <?php while($rowDt = mysqli_fetch_array($queryDt)){?>
                                <option <?php if ($rowDt['id_dienthoai'] == $row['id_dienthoai']){echo "selected='selected'";} ?> value=<?php echo $rowDt['id_dienthoai'];?>><?php echo $rowDt['ten_dienthoai'];?></option>
                            <?php }?>                            
                                <option value=1>Iphone</option>
                                <option value=2>SamSung</option>
                                <option value=3>Xiaomi</option>
                                <option value=4>OPPO</option>
                                <option value=5>Realme</option>
                                <option value=6>Nokia</option>
                                <option value=7>ViVo</option>
                        </select>
                        <?php if(isset($error_id_dienthoai)){echo $error_id_dienthoai;}?>
                    <br>
                        <a>Ảnh sản phẩm</a>
                    <br>
                        <input type="file" name="anh_sp" id="anhsp"><img  src="images/<?php echo $row['anh_sp'];?>"/>
                        <?php if(isset($error_anh_sp)){echo $error_anh_sp;}?>
                    <br>
                        <a>Số lượng</a>
                    <br>
                        <input type="number" name="so_luong" id="soluong" value="<?php if(isset($_POST['so_luong'])){echo $row['so_luong'];} else{echo $row['so_luong'];}?>">

                        <?php if(isset($error_so_luong)){echo $error_so_luong;}?>
                    <br>
                        <a>Comment</a>
                    <br>
                        <textarea cols="60" rows="12" name="comment">"<?php if(isset($_POST['comment'])){echo $row['comment'];} else{echo $row['comment'];}?>"</textarea>
                        <?php if(isset($error_comment)){echo $error_comment;}?>
                    <br>
                        <input type="submit" name="submit" value="Cập nhật" />
                        <input type="reset" name="reset" value="Làm mới" />

                </div>
                
            </form>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="foot">
                <div class="left">
                        <h2>Đây là bài thực hành thiết kế web của nhóm 11</h2>
                        <p>Vũ Tiến Đạt, Lê Đức Thuận, Nguyễn Thế Bảo</p>
                        <p>Nguyễn Thị Như Quỳnh, Nguyễn Minh Quân</p>
                        <p>Bản Quyền thuộc về nhóm 11 - 71DCTT22</p>
                </div>
                <div class="right">
                    <img src="images/utt.png" alt="logo utt" class="logo-footer">
                </div>
            </ul>
            </div>  
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