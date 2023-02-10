<?php 
            $chitiet="";
			$tk = $_SESSION['tk'];
            $sdt = $_SESSION['sdt'];
            $diachi = $_SESSION['diachi'];

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
                        $soluongmua=$_SESSION['cart'][$row['id_sp']]['so_luong'];
                        echo $soluongmua;
                        echo "<br>";
                        echo $row['so_luong'];
                        if($soluongmua>$row['so_luong']){
                            $_SESSION['errorMessage'] = "Sản phẩm $row[ten_sp] hiện đang hết hàng hoặc không đủ số lượng";
                            unset($_SESSION['cart'][$row['id_sp']]);
                            header('location: trangchu.php?page_layout=giohang');
                            break;
                        }
                      echo "<br>";
                      echo $row['ten_sp']." x ".$_SESSION['cart'][$row['id_sp']]['so_luong']."   ".$_SESSION['cart'][$row['id_sp']]['so_luong']*$row['gia_sp']." VNĐ";
                    $chitiet.=$row['ten_sp']." x ".$_SESSION['cart'][$row['id_sp']]['so_luong']."\r\n";
                      echo "<br>";
                    }
                    if(isset($_SESSION['errorMessage'])==0){
                    if(isset($_SESSION['tk'])){
                        $sql2=" INSERT INTO hoadon(tk, chi_tiet_hd, gia_tien, sdt, diachi)
                        VALUES( '$tk' , '$chitiet' , '$totalprice' , '$sdt' , '$diachi') ";  
                    }else{
                        $sql2="INSERT INTO hoadon(chi_tiet_hd, gia_tien, sdt, diachi)
                        VALUES('$chitiet','$totalprice','$sdt','$diachi')";
                    }
                    echo $sql2;
                    $query2=mysqli_query($dbConnect,$sql2);
                    {
                        $sql4="SELECT * FROM sanpham WHERE id_sp IN (";
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql4.=$id.","; 
                    }
                        $sql4=substr($sql4, 0, -1).") ORDER BY ten_sp ASC";
                        echo $sql4;
                        $query4=mysqli_query($dbConnect,$sql4);
                            while($row=mysqli_fetch_array($query4))
                            {
                            $id_sp = $row['id_sp'];
                            $soluongsau = $row['so_luong'] - $_SESSION['cart'][$row['id_sp']]['so_luong'];
                            $sql3="UPDATE sanpham SET so_luong = $soluongsau WHERE id_sp = $id_sp";
                            echo $sql3;
                            $query3=mysqli_query($dbConnect,$sql3);
                            }
                    unset($_SESSION['cart']);
                    unset($_SESSION['sdt']);
                    unset($_SESSION['diachi']);
                    $_SESSION['chitiet']=$chitiet;
                    header('location: trangchu.php?page_layout=chitiet');
                    }
                }
?>