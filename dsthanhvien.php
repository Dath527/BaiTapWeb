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
    $sql = "SELECT * FROM thanhvien";
    $query = mysqli_query($dbConnect, $sql);
    
    // Tổng số Sản phẩm trong CSDL
    $sqlSelect = "SELECT * FROM thanhvien";
    $totalRow = mysqli_num_rows(mysqli_query($dbConnect, $sqlSelect));
    // Tính tổng số trang
    $totalPage = ceil($totalRow/$rowsPerPage);

    $listPage = '';
    for($i=1; $i <= $totalPage; $i++){
        if($i == $page){
            $listPage .= '<span>'.$i.'</span> ';
        }
        else{
            $listPage .= '<a href="'.$_SERVER['PHP_SELF'].'?page_layout=thanhvien&page='.$i.'">'.$i.'</a> ';
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
                    <th width="5%">Tài khoản</th>
                    <th width="20%">Mật khẩu</th>
                    <th width="10%">Số điện thoại</th>
                    <th width="10%">Họ Tên</th>
                    <th width="40%">Địa chi</th>
                    <th width="10%">Xóa</th>
                </tr>
                <?php while($row = mysqli_fetch_array($query)){?>
                    <tr>
                        <td><span><?php echo $row['tai_khoan'];?></span></td>
                        <td class="tensanpham"><?php echo $row['mat_khau'];?></a></td>
                        <td ><span class="price"><?php echo $row['phone'];?></span></td>
                        <td ><?php echo $row['name'];?></td>
                        <td ><?php echo $row['address'];?></td>
                        <td><a  href="xoatv.php?tk=<?php echo $row['tai_khoan'];?>">Xóa</td>
                        </tr>
                <?php }?>
            </table>
            <p id="pagination"><?php echo $listPage; ?></p>
        </div>
    </div>