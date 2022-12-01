<?php 
  
    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=intval($_GET['id']); 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantity']++; 
              
        }else{ 
              
            $sql_s="SELECT * FROM sanpham
                WHERE id_sampham={$id}"; 
            $query_s=mysql_query($sql_s); 
            if(mysql_num_rows($query_s)!=0){ 
                $row_s=mysql_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['id_sanpham']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['gia_sp'] 
                    ); 
                  
                  
            }else{ 
                  
                $message="Sản phẩm này không tồn tại!"; 
                  
            } 
              
        } 
          
    } 
  
?>
<div class="container">
            <div class="row">   
                <?php while($row = mysqli_fetch_array($query)){?>
                    <div class="sanpham">
                        <div class="anhsanpham" onclick="window.location.href = 'trangchu.php?page_layout=showsp&id_sp=<?php echo $row['id_sp']?>'">
                            <img src="images/<?php echo $row['anh_sp'];?>" alt="điện thoại" class="anh">
                        </div>
                        <div class="tensanpham">
                            <?php echo $row['ten_sp'];?>
                        </div>
                        <div class="giatien">
                            <?php echo $row['gia_sp'];?>
                        </div>
                    </div>
                <?php }?>
                
            </div>
            <p id="pagination"><?php echo $listPage; ?></p>
        </div>