<?php
    $tk = $_SESSION['tk'];
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
    // Hiển thị số Sản phẩm trên một trang
    $rowsPerPage = 15;

    // Tính vị trí mẩu tin đầu tiên của mỗi trang
    $firstRow = $page*$rowsPerPage - $rowsPerPage;
 
    // Tổng số Sản phẩm trong CSDL
    $sqlSelect = "SELECT DISTINCT * FROM hoadon WHERE tk LIKE '%$tk%' ORDER BY ID DESC ";
    $totalRow = mysqli_num_rows(mysqli_query($dbConnect, $sqlSelect));
    // Tính tổng số trang
    $totalPage = ceil($totalRow/$rowsPerPage);

    $listPage = '';
    for($i=1; $i <= $totalPage; $i++){
        if($i == $page){
            $listPage .= '<span>'.$i.'</span> ';
        }
        else{
            $listPage .= '<a class ="NU" href="'.$_SERVER['PHP_SELF'].'?page_layout=lichsu'.'&page='.$i.'">'.$i.'</a> ';
        }
    }
?>
<div class="giohang">
<form method="post" class="form"> 
      
    <table class="table">
        <tr>
            <th><div class="cell2">Mã hóa đơn</div></th>
            <th><div class="cell2">Chi tiết</div></th>
            <th><div class="cell2">Tổng tiền</div></th>
        </tr>
        <?php
            $sql="SELECT DISTINCT * FROM hoadon  ORDER BY ID DESC LIMIT $firstRow, $rowsPerPage";
                    $query=mysqli_query($dbConnect,$sql);
                    while($row=mysqli_fetch_array($query)){
                    ?> 
                    <tr <?php if($row['ID']%2==0)
                    echo 'class="row1"';
                    else
                    echo 'class="row2"'; ?>>
                            <td><div class="cell1"><a class="cell4"><?php echo $row['ID'] ?><a></div></td>
                            <td><div class="cell"><?php echo $row['chi_tiet_hd'] ?></div></td>   
                            <td><div class="cell"><?php echo $row['gia_tien']; ?></div></td>
                            <td><div class="cell"> VNĐ  </div></td>
                            <td><div class="cell3" onclick="window.location.href = 'admin.php?page_layout=chitiet&ID=<?php echo $row['ID']?>'"> Chi tiết</div></td>
                    </tr>
                    <?php
                    }
        ?> 
    </table>
    <p class="page"><?php echo $listPage; ?></p>
</form> 
</div>