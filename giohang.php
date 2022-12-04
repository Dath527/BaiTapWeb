<h1>View cart</h1> 
<a href="index.php?page=products">Go back to products page</a> 
<form method="post"> 
      
    <table> 
          
        <tr> 
            <th>Name</th> 
            <th>Quantity</th> 
            <th>Price</th> 
            <th>Items Price</th> 
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
                        $subtotal=$_SESSION['cart'][$row['id_sp']]['quantity']*$row['gia_sp']; 
                        $totalprice+=$subtotal; 
                    ?> 
                        <tr> 
                            <td><?php echo $row['ten_sp'] ?></td> 
                            <td><input type="number" name="quantity[<?php echo $row['id_sp'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_sp']]['quantity'] ?>" /></td> 
                            <td><?php echo $row['gia_sp'] ?>VNĐ</td> 
                            <td><?php echo $_SESSION['cart'][$row['id_sp']]['quantity']*$row['gia_sp'] ?>VNĐ</td>
                            <?php echo 'unset($_SESSION['cart'][$row['id_sp']])'; ?>
                            <td><div onclick="<?php echo 'unset($_SESSION['cart'][$row['id_sp']])'; ?> ">
                            <i class="fa-solid fa-x" style="color:red;"></i></div></td>
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
<p>To remove an item, set it's quantity to 0. </p>