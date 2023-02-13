<?php
    ob_start();
    session_start();
    require('ketnoi.php');
    // Nhận biến Page(Số thứ tự của Trang)
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
    $timkiem = $_GET['timkiem'];
    // Hiển thị số Sản phẩm trên một trang
    $rowsPerPage = 10;

    // Tính vị trí mẩu tin đầu tiên của mỗi trang
    $firstRow = $page*$rowsPerPage - $rowsPerPage;

    // Liệt kê Danh sách dữ liệu trên mỗi trang
    $sql = "SELECT * FROM sanpham
            INNER JOIN dmdienthoai
            ON sanpham.id_dienthoai = dmdienthoai.id_dienthoai Where ten_sp like '%$timkiem%'
            ORDER BY id_sp DESC
            LIMIT $firstRow, $rowsPerPage";
    $query = mysqli_query($dbConnect, $sql);
    
    // Tổng số Sản phẩm trong CSDL
    $sqlSelect = "SELECT * FROM sanpham";
    $totalRow = mysqli_num_rows(mysqli_query($dbConnect, $sqlSelect));
    // Tính tổng số trang
    $totalPage = ceil($totalRow/$rowsPerPage);

    $listPage = '';
    for($i=1; $i <= $totalPage; $i++){
        if($i == $page){
            $listPage .= '<span>'.$i.'</span> ';
        }
        else{
            $listPage .= '<a href="'.$_SERVER['PHP_SELF'].'?&page='.$i.'">'.$i.'</a> ';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/95051aed7b.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
<?php
    if (!empty($_GET)) {
        switch($_GET['page_layout']){
            
          case 'nhanvien' : echo '<link rel="stylesheet" type="text/css" href="css/danhsachsp.css" />';
          break;
          
          case 'khachhang' : echo '<link rel="stylesheet" type="text/css" href="css/danhsachsp.css" />';
          break;
          
          case 'dienthoai': echo '<link rel="stylesheet" type="text/css" href="css/danhsachsp.css" />';
          break;

          case 'themsp': echo '<link rel="stylesheet" type="text/css" href="css/themsp.css" />';
          break;
          
          case 'suasp': echo '<link rel="stylesheet" type="text/css" href="css/suasp.css" />';
          break;

          case 'showsp': echo '<link rel="stylesheet" type="text/css" href="css/showsp.css" />';
          break;

          case 'giohang': echo '<link rel="stylesheet" type="text/css" href="css/giohang.css" />';
          break;

          case 'thanhtoan': echo '<link rel="stylesheet" type="text/css" href="css/thanhtoan.css" />';
          break;

          case 'dangnhap': echo '<link rel="stylesheet" type="text/css" href="css/dangnhap.css" />';
          break;

          case 'dangki': echo '<link rel="stylesheet" type="text/css" href="css/dangki.css" />';
          break;
          
          case 'chitiet': echo '<link rel="stylesheet" type="text/css" href="css/chitiet.css" />';
          break;
          
          case 'lichsu': echo '<link rel="stylesheet" type="text/css" href="css/lichsu.css" />';
          break;
          
          case 'suatk': echo '<link rel="stylesheet" type="text/css" href="css/suatk.css" />';
          break;
          
          case 'taikhoan': echo '<link rel="stylesheet" type="text/css" href="css/taikhoan.css" />';
          break;
          
          case 'matkhau': echo '<link rel="stylesheet" type="text/css" href="css/matkhau.css" />';
          break;

          case 'suatv': echo '<link rel="stylesheet" type="text/css" href="css/suatv.css" />';
          break;

        }
    }  
?>
</head>
<body>
    <header>
        <div class="menu">
            <ul>
                <li style="margin: 0; width: 10%;"><div class="beephone"><img width="70px" height="70px" src="images/beephone.png" alt="logo" >
                <a  href="admin.php">Bee<span>Phone</span></a></div></li>
                <li><div class="tab"><a href="admin.php?page_layout=nhanvien">Nhân viên</a></div></li>
                <li><div class="tab"><a href="admin.php?page_layout=khachhang">Khách hàng</a></div></li>
                <li><div class="tab"><a href="admin.php?page_layout=dienthoai">Điện thoại</a></div></li>
                <!-- <li><div class="tab" id="phukienbtn"><a href="admin.php?page_layout=phukien">Phụ kiện</a></div>
                    <div class="box">
                    <ul class="sub-menu" id="phukienmenu">
                        <li><div class="tabbox"><a href="">Tai nghe</a></div></li>
                        <li><div class="tabbox"><a href="">Loa</a></div></li>
                        <li><div class="tabbox"><a href="">Cáp, sạc</a></div></li>
                        <li><div class="tabbox"><a href="">Pin dự phòng</a></div></li>
                        <li><div class="tabbox"><a href="">Các phụ kiện khác</a></div></li>
                    </ul>
                    </div>
                </li> -->
                <li style="width: 220px;"><div><form><input placeholder="Tìm kiếm" type="search" class="timkiem" name="timkiem" onsubmit=""></form></div></li>
                      <li><div class="tab" id="taikhoanbtn"><a><?php echo $_SESSION['ten']?></a></div>
                      <div class="box">
                   <ul class="sub-menu" id="taikhoanmenu">
                        <li><div class="tabbox"><a href="admin.php?page_layout=taikhoan">Thông tin tài khoản</a></div></li>
                        <li><div class="tabbox"><a href="admin.php?page_layout=matkhau">Đổi mật khẩu</a></div></li>
                        <li><div class="tabbox"><a href="admin.php?page_layout=lichsu">Xem hóa đơn</a></div></li>
                        <li><div class="tabbox"><a href="admin.php?page_layout=dangxuat">Đăng xuất</a></div></li>
                </ul>
                </div>
                </li>;
            </ul>
        </div>
    </header>
    <div class="body">
        <?php
            if (!empty($_GET['page_layout'])) {
                switch($_GET['page_layout']){
                  case 'nhanvien' : include_once('dsthanhvien.php');break;
                  case 'khachhang' : include_once('dskhachhang.php');break;
                  case 'dienthoai': include_once('danhsachsp.php');break;
                  case 'themsp': include_once('themsp.php');break;
                  case 'suasp': include_once('suasp.php');break;
                  case 'showsp': include_once('showsp.php');break;
                  case 'giohang': include_once('giohang.php');break;
                  case 'dangnhap': include_once('dangnhap.php');break;
                  case 'dangki': include_once('dangki.php');break;
                  case 'dangxuat': include_once('dangxuat.php');break;
                  case 'xoasp': include_once('xoasp.php');break;
                  case 'xoagiohang': include_once('xoagiohang.php');break;
                  case 'thanhtoan': include_once('thanhtoan.php');break;
                  case 'test': include_once('test.php');break;
                  case 'chitiet': include_once('chitiethoadon.php');break;
                  case 'lichsu': include_once('lichsuadmin.php');break;
                  case 'suatk': include_once('suataikhoan.php');break;
                  case 'taikhoan': include_once('taikhoan.php');break;
                  case 'matkhau': include_once('matkhau.php');break;
                  case 'suatv': include_once('suatv.php');break;
                  default: include_once('sanpham.php');
                }
            } else {
                include_once('sanpham.php');
            }
        ?>
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
const el5 = document.getElementById('taikhoanbtn');

const hiddenEl5 = document.getElementById('taikhoanmenu');

el5.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl5.style.display = 'block';
});

hiddenEl5.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl5.style.display = 'none';
});

el5.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl5.style.display = 'none';
});

hiddenEl5.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl5.style.display = 'block';
});    
    </script>
</body>
</html>