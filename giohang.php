<?php 
    if(isset($_SESSION['errorMessage'])){
        echo "<script type='text/javascript'>
                alert('" . $_SESSION['errorMessage'] . "');
              </script>";
        unset($_SESSION['errorMessage']);
    }
  
    if(isset($_POST['capnhat'])){ 
          
        foreach($_POST['so_luong'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['cart'][$key]); 
            }else{ 
                $_SESSION['cart'][$key]['so_luong']=$val; 
            } 
        } 
          
    } 
    
    if(isset($_POST['thanhtoan']))
    {
        if($_POST['diachi'] == ''){
            $error_diachi = '<span style="color:red;">(*)</span>';
        }
        else{
            $diachi = $_POST['diachi'];
            $_SESSION['diachi']=$diachi;
        }
        if($_POST['sdt'] == ''){
            $error_sdt = '<span style="color:red;">(*)</span>';
        }
        else{
            $sdt = $_POST['sdt'];
            $_SESSION['sdt']=$sdt;
        }
        if (isset($diachi)&&isset($sdt))
        {
        header('location: trangchu.php?page_layout=thanhtoan');
        }
    }
?>
<div class="giohang">
<form method="post" class="form"> 
      
    <table class="table"> 
          
        <tr>
            <th class="kcgh">Ảnh</th>
            <th class="kcgh">Tên SP</th> 
            <th class="kcgh">Số lượng</th> 
            <th class="kcgh">Đơn giá</th> 
            <th class="kcgh">Giá</th>
            <th class="kcgh">Xóa</th>
        </tr> 
          
        <?php 
            if(isset($_SESSION['tk']))
             {
                $diachi=$_SESSION['diachi'];
                $sdt=$_SESSION['sdt'];
            }
          
            $sql="SELECT * FROM sanpham WHERE id_sp IN ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql.=$id.","; 
                    } 
                      
                    $sql=substr($sql, 0, -1).") ORDER BY ten_sp ASC";
                    $query=mysqli_query($dbConnect,$sql); 
                    $totalprice=0; 
                    while($row=mysqli_fetch_array($query)){ 
                        $subtotal=$_SESSION['cart'][$row['id_sp']]['so_luong']*$row['gia_sp']; 
                        $totalprice+=$subtotal; 
                    ?> 
                        <tr> 
                            <td><img src="images/<?php echo $row['anh_sp'];?>" alt="điện thoại" class="anh">
                            <td><div class="hang"><?php echo $row['ten_sp'] ?></div></td> 
                            <td><div class="soluong"><input class="so_luong" type="number" name="so_luong[<?php echo $row['id_sp'] ?>]" size="5" 
                            value="<?php echo $_SESSION['cart'][$row['id_sp']]['so_luong'] ?>" /></div></td> 
                            <td><div class="hang"><?php echo $row['gia_sp'] ?> VNĐ</div></td> 
                            <td><div class="hang"><?php echo $_SESSION['cart'][$row['id_sp']]['so_luong']*$row['gia_sp'] ?> VNĐ</div></td>
                            <td><div class="hang"><div class="xoa" onclick="window.location.href = 'trangchu.php?page_layout=xoagiohang&id_sp=<?php echo $row['id_sp']; ?>'"> X</div></div></td>
                        </tr> 
                    <?php 
                          
                    }   
        ?> 
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Tổng giá: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $totalprice ?> VNĐ</div></td> 
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Số điện thoại: </div></td>
                        <td colspan="5"><input type="text" class="sdt" name="sdt" 
                        <?php
                         if(isset($_SESSION['sdt'])) {echo 'value="'.$sdt.'"';} 
                        ?>
                        >
                        <?php if(isset($error_sdt)){echo$error_sdt;}?></td>
                    <tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Địa chỉ: </div></td>
                        <td colspan="5"><input type="text" class="diachi" name="diachi" 
                        <?php
                         if(isset($_SESSION['diachi'])) {echo 'value="'.$diachi.'"';} 
                         ?>
                         >
                        <?php if(isset($error_diachi)){echo$error_diachi;}?></td>
                    </tr>
          
    </table> 
    <br /> 
    <button type="submit" name="capnhat">Cập nhật giỏ hàng</button>
    <button type="submit" name="thanhtoan">Thanh toán</button>
</form> 
</div>