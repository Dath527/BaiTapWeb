<?php
    require('ketnoi.php');
    $id_sp = $_GET['id_sp'];
    $sql = "SELECT * FROM sanpham WHERE id_sp = $id_sp";
    $query = mysqli_query($dbConnect, $sql);
    $row = mysqli_fetch_array($query);
    $sqlDt = "SELECT * FROM dmdienthoai";
    $queryDt = mysqli_query($dbConnect, $sqlDt);
    
    if(isset($ten_sp) && isset($gia_sp)  && isset($anh_sp) && isset($id_dienthoai) 
        && isset($comment) && isset($so_luong) && $so_luong>0 && $gia_sp>0){
        move_uploaded_file($tmp, 'images/'.$anh_sp);

       $sql = "UPDATE sanpham SET id_dienthoai = $id_dienthoai, ten_sp = '$ten_sp', anh_sp = '$anh_sp', gia_sp = '$gia_sp',comment = '$comment', so_luong = '$so_luong' WHERE id_sp = $id_sp";
       $query = mysqli_query($dbConnect, $sql);
       header('location:admin.php?page_layout=dienthoai');

    }
?>
<?php 
  
  if(isset($_GET['action']) && $_GET['action']=="add"){ 
        
      $id=intval($_GET['id_sp']); 
        
      if(isset($_SESSION['cart'][$id])){ 
            
          $_SESSION['cart'][$id]['quantity']++; 
            
      }else{ 
            
          $sql_s="SELECT * FROM sanpham
              WHERE id_sp={$id}"; 
          $query_s=mysqli_query($dbConnect,$sql_s); 
          if(mysqli_num_rows($query_s)!=0){ 
              $row_s=mysqli_fetch_array($query_s); 
                
              $_SESSION['cart'][$row_s['id_sp']]=array( 
                      "quantity" => 1, 
                      "price" => $row_s['gia_sp'] 
                  ); 
                
            $message="Sản phẩm đã được thêm vào giỏ hàng!";
          }else{ 
                
            $message="Sản phẩm này không tồn tại!"; 
                
          } 
            
      } 
        
  } 

?>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="form">
                        <a>Tên sản phẩm</a>
                    <br>
                        <input type="text" name="ten_sp" id="tensp" value="<?php if(isset($_POST['ten_sp'])){echo $row['ten_sp'];} else{echo $row['ten_sp'];} ?>">
                    <br>
                        <a>Giá sản phẩm</a>
                    <br>    
                        <input type="number" name="gia_sp" id="giasp" value="<?php if(isset($_POST['gia_sp'])){echo $row['gia_sp'];} else{echo $row['gia_sp'];}?>">
                    <br>    
                        <a>Ảnh sản phẩm</a>
                    <br>
                        <img src="images/<?php echo $row['anh_sp'];?>" class="anh">
                    <br>
                        <input type="file" name="anh_sp" id="anhsp">
                        <?php if(isset($error_anh_sp)){echo $error_anh_sp;}?>
                    <br>
                        <a>Comment</a>
                    <br>
                        <textarea cols="60" rows="12" name="comment">"<?php if(isset($_POST['comment'])){echo $row['comment'];} else{echo $row['comment'];}?>"</textarea>
                        <?php if(isset($error_comment)){echo $error_comment;}?>
                    <br>
                        <a href="trangchu.php?page_layout=showsp&action=add&id_sp=<?php echo $row['id_sp'] ?>">Add to cart</a>
                        <input type="submit" name="submit" value="Cập nhật" />
                        <input type="reset" name="reset" value="Làm mới" />

                </div>
                
            </form>
        </div>
<?php 
  
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM sanpham WHERE id_sp IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
          
        $sql=substr($sql, 0, -1).") ORDER BY ten_sp ASC"; 
        $query=mysqli_query($dbConnect,$sql); 
        while($row=mysqli_fetch_array($query)){ 
              
?> 
            <p><?php echo $row['ten_sp'] ?> x <?php echo $_SESSION['cart'][$row['id_sp']]['quantity'] ?></p> 
<?php 
              
        } 
?> 
        <hr /> 
        <a href="trangchu.php?page_layout=giohang">Go to cart</a> 
<?php 
          
    }else{ 
          
        echo "<p>Your Cart is empty. Please add some products.</p>"; 
          
    } 
  
?>