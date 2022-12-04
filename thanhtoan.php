<?php 
            $chitiet="";
			$tk=$_SESSION['tk'];
			echo $value;
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
                      echo "<br>";
                      echo $row['ten_sp']."x".$_SESSION['cart'][$row['id_sp']]['so_luong'];
                    $chitiet.=$row['ten_sp']." x ".$_SESSION['cart'][$row['id_sp']]['so_luong']."\r\n";
                      echo "<br>";
                    }
                    echo $chitiet;
                    if(isset($_SESSION['tk'])){
                        $sql2=" INSERT INTO hoadon(tk, chi_tiet_hd, gia_tien)
                        VALUES( '$tk' , '$chitiet' , '$totalprice') ";
						echo $sql2;
                    }else{
                        $sql2="INSERT INTO hoadon(chi_tiet_hd,gia_tien)
                        VALUES('$chitiet','$totalprice')";
						echo $sql2;
                    }
                    $query2=mysqli_query($dbConnect,$sql2);
?>