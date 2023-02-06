<?php 
  
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
        header('location: trangchu.php?page_layout=thanhtoan');
    }
?>
<div class="giohang">
<form method="post" class="form"> 
      
    <table class="table"> 
          
        <tr>
            <th>Ảnh</th>
            <th>Tên SP</th> 
            <th>Số lượng</th> 
            <th>Đơn giá</th> 
            <th>Giá</th>
            <th>Xóa</th>
        </tr> 
          
        <?php 
          
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
                            <td><?php echo $row['ten_sp'] ?></td> 
                            <td><input class="so_luong" type="number" name="so_luong[<?php echo $row['id_sp'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_sp']]['so_luong'] ?>" /></td> 
                            <td><?php echo $row['gia_sp'] ?>VNĐ</td> 
                            <td><?php echo $_SESSION['cart'][$row['id_sp']]['so_luong']*$row['gia_sp'] ?>VNĐ</td>
                            <td><a href="trangchu.php?page_layout=xoagiohang&id_sp=<?php echo $row['id_sp']; ?>" >   X </a></td>
                        </tr> 
                    <?php 
                          
                    }   
        ?> 
                    <tr> 
                        <td colspan="4">Tổng cộng:<span style="color:red;"> <?php echo $totalprice ?> VNĐ</span> </td> 
                    </tr> 
          
    </table> 
    <br /> 
    <button type="submit" name="capnhat">Cập nhật giỏ hàng</button>
    <button type="submit" name="thanhtoan">Thoan toán</button>
</form> 
</div>