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
    require('ketnoi.php');
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
            $listPage .= '<a href="'.$_SERVER['PHP_SELF'].'?page_layout=danhsachsp&page='.$i.'">'.$i.'</a> ';
        }
    }

?>
<a href="trangchu.php?page_layout=themsp">thêm sản phẩm</a>
        <form method="POST">
        <input type="submit" value="Xuất Excel" name="btnXuatExcel">
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
                        <td><a href="suasp.php?page_layout=suasp&id_sp=<?php echo $row["id_sp"] ?>"><span>Sửa</span></a>
                        </td>
                        <td><a onclick="return xoaSanpham();" href="xoasp.php?id_sp=<?php echo $row['id_sp'];?>"><span>Xóa</span></a></td>
                        </tr>
                <?php }?>
            </table>
            <p id="pagination"><?php echo $listPage; ?></p>
        </div>
    </div>
<!--  -->