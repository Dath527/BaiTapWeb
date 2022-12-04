<form method="post"> 
      
    <table> 
          
        <tr> 
            <th>Name</th> 
            <th>so_luong</th> 
            <th>Price</th> 
            <th>Items Price</th>
            <th> Xoa </th>
        </tr> 
          
        <?php 
          
            $sql="SELECT * FROM sanpham WHERE id_sp IN ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql.=$id.","; 
                    } 
                      
                    $sql=substr($sql, 0, -1).") ORDER BY ten_sp ASC";
                    echo $sql;
                    $query=mysqli_query($dbConnect,$sql); 
                    $totalprice=0; 
                    while($row=mysqli_fetch_array($query)){ 
                        $subtotal=$_SESSION['cart'][$row['id_sp']]['so_luong']*$row['gia_sp']; 
                        $totalprice+=$subtotal; 
                    ?> 
                        <tr> 
                            <td><?php echo $row['ten_sp'] ?></td> 
                            <td><input type="number" name="so_luong[<?php echo $row['id_sp'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_sp']]['so_luong'] ?>" /></td> 
                            <td><?php echo $row['gia_sp'] ?>VNĐ</td> 
                            <td><?php echo $_SESSION['cart'][$row['id_sp']]['so_luong']*$row['gia_sp'] ?>VNĐ</td>
                            <td><a href="trangchu.php?page_layout=xoagiohang&id_sp=<?php echo $row['id_sp']; ?>" > X </a></td>
                        </tr> 
                    <?php 
                          
                    } 
        ?> 
                    <tr> 
                        <td colspan="4">Total Price: <?php echo $totalprice ?></td> 
                    </tr> 
          
    </table> 
    <br /> 
    <button type="submit" name="submit">Update Cart</button> 
</form> 
<br /> 
<p>To remove an item, set it's so_luong to 0. </p>