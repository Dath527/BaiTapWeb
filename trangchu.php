<?php
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
    include_once('ketnoi.php');
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
            $listPage .= '<a href="'.$_SERVER['PHP_SELF'].'?page_layout=danhsachsp&page='.$i.'">'.$i.'</a> ';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
                        <li><div class="tabbox"><a href="">Thinkpad</a></div></li>
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
                <li style="width: 220px;"><div><form><input placeholder="Tìm kiếm" type="search" class="timkiem" name="timkiem" onsubmit=""></form></div></li>
                <li><div class="tab"><a href="">Giỏ hàng</a></div></li>
                <li><div class="tab"><a href="">Đăng nhập</a></div></li>
            </ul>
        </div>
    </header>
    <div class="body">
        <div class="container">
            <div class="row">   
                <?php while($row = mysqli_fetch_array($query)){?>
                    <div class="sanpham">
                    <div class="anhsanpham">
                    <img src="images/<?php echo $row['anh_sp'];?>" alt="điện thoại" class="anh">
                    </div>
                    <div class="tensanpham">
                        <?php echo $row['ten_sp'];?>
                    </div>
                    <div class="giatien">
                        <?php echo $row['gia_sp'];?>
                    </div>
                </div>
                <?php }?>
                
            </div>
            <p id="pagination"><?php echo $listPage; ?></p>
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