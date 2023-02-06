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
    if(isset($_POST['btnthemsp'])){
      header('location:admin.php?page_layout=themsp');
    }
?>
        <form method="POST" enctype="multipart/form-data">
          <div class="them-nhap-xuat">
            <div class="them">
              <input type="submit" value="Thêm sản phẩm" name="btnthemsp">
            </div>
            <div class="xuat">
              <input type="submit" value="Xuất Excel" name="btnXuatExcel">
            </div>
            <div class="nhap">
              <input type="file" name="fileExcel" id="fileExcel">
              <?php if(isset($error_fileExcel)){echo$error_fileExcel;}?>
              <input type="submit" value="Nhập Excel" name="btnNhapExcel">
            </div>
          </div>
        </form>
        <div class="container">
            <table>
                <tr>
                    <th width="5%">ID</th>
                    <th width="19%">Tên sản phẩm</th>
                    <th width="8%">Giá</th>
                    <th width="8%">Nhà Cung Cấp</th>
                    <th width="16%">Ảnh</th>
                    <th width="8%">Số lượng</th>
                    <th width="8%">Sửa</th>
                    <th width="8%">Xóa</th>
                </tr>
                <?php while($row = mysqli_fetch_array($query)){?>
                    <tr style="height:100px;">
                        <td><span><?php echo $row['id_sp'];?></span></td>
                        <td class="tensanpham"><a href="#"><?php echo $row['ten_sp'];?></a></td>
                        <td class="gia"><span class="price"><?php echo $row['gia_sp'];?></span></td>
                        <td class="nhacungcap"><?php echo $row['ten_dienthoai'];?></td>
                        <td><span class="thumb"><img class="anhdanhsach" alt="sanpham" width="60" src="images/<?php echo $row['anh_sp'];?>" /></span></td>
                        <td class="gia"><span class="price"><?php echo $row['so_luong'];?></span></td>
                        <td><a href="admin.php?page_layout=suasp&id_sp=<?php echo $row["id_sp"] ?>"><span>Sửa</span></a>
                        </td>
                        <td><a onclick="return xoaSanpham();" href="xoasp.php?id_sp=<?php echo $row['id_sp'];?>"><span>Xóa</span></a></td>
                        </tr>
                <?php }?>
            </table>
            <p id="pagination"><?php echo $listPage; ?></p>
        </div>
    </div>