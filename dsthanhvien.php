<?php
    require('xuatexcel.php');
    // Nhận biến Page(Số thứ tự của Trang)
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
 
    // Hiển thị số Sản phẩm trên một trang 123
    $rowsPerPage = 10;

    // Tính vị trí mẩu tin đầu tiên của mỗi trang
    $firstRow = $page*$rowsPerPage - $rowsPerPage;

    // Liệt kê Danh sách dữ liệu trên mỗi trang
    $sql = "SELECT * FROM thanhvien WHERE quyen_truy_cap = 1
            ORDER BY tai_khoan ASC
            LIMIT $firstRow, $rowsPerPage";
    $query = mysqli_query($dbConnect, $sql);
    
    // Tổng số Sản phẩm trong CSDL
    $sqlSelect = "SELECT * FROM thanhvien WHERE quyen_truy_cap = 1";
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
        <div class="container">
          <div class="title">Quản lý thành viên</div>
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
                        <td><?php echo $row['tai_khoan'];?></td>
                        <td><?php echo $row['mat_khau'];?></a></td>
                        <td><?php echo $row['sdt'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['diachi'];?></td>
                        <td><a  href="xoatv.php?tk=<?php echo $row['tai_khoan'];?>">Xóa</td>
                        </tr>
                <?php }?>
            </table>
            <p id="pagination"><?php echo $listPage; ?></p>
        </div>
    </div>