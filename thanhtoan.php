<?php 
            $chitiet="";
			$tk = $_SESSION['tk'];
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
                    <?php 
                      echo "<br>";
                      echo $row['ten_sp']." x ".$_SESSION['cart'][$row['id_sp']]['so_luong']."   ".$_SESSION['cart'][$row['id_sp']]['so_luong']*$row['gia_sp']." VNĐ";
                    $chitiet.=$row['ten_sp']." x ".$_SESSION['cart'][$row['id_sp']]['so_luong']."\r\n";
                      echo "<br>";
                    }
                    echo "<br>";
                    echo $totalprice;
                    if(isset($_SESSION['tk'])){
                        $sql2=" INSERT INTO hoadon(tk, chi_tiet_hd, gia_tien)
                        VALUES( '$tk' , '$chitiet' , '$totalprice') ";  
                    }else{
                        $sql2="INSERT INTO hoadon(chi_tiet_hd,gia_tien)
                        VALUES('$chitiet','$totalprice')";
                    }
                    $query2=mysqli_query($dbConnect,$sql2);
                    unset($_SESSION['cart']);
                    header('location: trangchu.php');
?>