<?php
    require('xuatexcel.php');
    // Nhận biến Page(Số thứ tự của Trang)
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
 
    // Hiển thị số Sản phẩm trên một trang
    $rowsPerPage = 10;

    // Tính vị trí mẩu tin đầu tiên của mỗi trang
    $firstRow = $page*$rowsPerPage - $rowsPerPage;

    // Liệt kê Danh sách dữ liệu trên mỗi trang
    $sql = "SELECT * FROM sanpham
            INNER JOIN dmdienthoai
            ON sanpham.id_dienthoai = dmdienthoai.id_dienthoai
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
            $listPage .= '<a href="'.$_SERVER['PHP_SELF'].'?page_layout=dienthoai&page='.$i.'">'.$i.'</a> ';
        }
    }

?>
<a href="trangchu.php?page_layout=themsp">thêm sản phẩm</a>
        <form method="POST" enctype="multipart/form-data">
        <input type="submit" value="Xuất Excel" name="btnXuatExcel">
        <input type="file" name="fileExcel" id="fileExcel">
        <?php if(isset($error_fileExcel)){echo$error_fileExcel;}?>
        <input type="submit" value="Nhập Excel" name="btnNhapExcel">
        </form>
        <div class="container">
            <table>
                <tr>
                    <th width="5%">ID</th>
                    <th width="20%">Tên sản phẩm</th>
                    <th width="10%">Giá</th>
                    <th width="10%">Nhà Cung Cấp</th>
                    <th width="40%">Ảnh</th>
                    <th width="10%">Sửa</th>
                    <th width="10%">Xóa</th>
                </tr>
                <?php while($row = mysqli_fetch_array($query)){?>
                    <tr>
                        <td><span><?php echo $row['id_sp'];?></span></td>
                        <td class="tensanpham"><a href="#"><?php echo $row['ten_sp'];?></a></td>
                        <td class="gia"><span class="price"><?php echo $row['gia_sp'];?></span></td>
                        <td class="nhacungcap"><?php echo $row['ten_dienthoai'];?></td>
                        <td><span class="thumb"><img class="anhdanhsach" alt="sanpham" width="60" src="images/<?php echo $row['anh_sp'];?>" /></span></td>
                        <td><a href="trangchu.php?page_layout=suasp&id_sp=<?php echo $row["id_sp"] ?>"><span>Sửa</span></a>
                        </td>
                        <td><a onclick="return xoaSanpham();" href="xoasp.php?id_sp=<?php echo $row['id_sp'];?>"><span>Xóa</span></a></td>
                        </tr>
                <?php }?>
            </table>
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
function xoaSanpham(){
        let conf = confirm('Bạn chắc chắn muốn xóa sản phẩm này không?');
        return conf;
    }
    </script>
</body>
</html>