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
    if(isset($_POST['submit'])){
        $id=intval($_GET['id_sp']); 
        
      if(isset($_SESSION['cart'][$id])){ 
            
          $_SESSION['cart'][$id]['so_luong']++; 
            
      }else{ 
            
          $sql_s="SELECT * FROM sanpham
              WHERE id_sp={$id}"; 
          $query_s=mysqli_query($dbConnect,$sql_s); 
          if(mysqli_num_rows($query_s)!=0){ 
              $row_s=mysqli_fetch_array($query_s); 
                
              $_SESSION['cart'][$row_s['id_sp']]=array( 
                      "so_luong" => 1, 
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
            <div class="sanpham">
                <form method="post" enctype="multipart/form-data">
                    <div class="form">
                        <div class="tensanpham">
                                <?php echo $row['ten_sp'];?>
                        </div>
                        <div class="giatien">
                            <?php echo $row['gia_sp'];?> VNĐ
                        </div>
                            <img src="images/<?php echo $row['anh_sp'];?>" class="anh">
            <div class="tinhtrang">
                <?php 
                if($row['so_luong']=0){ 
                    echo '<div class="hethang">Tình trạng:</div>'
                    .'<div class="hethang2">HẾT HÀNG</div>';
                }else
                {
                    echo '<div class="conhang">Tình trạng:</div>'
                    .'<div class="conhang2">CÒN HÀNG</div>';
                }
                ?>
            </div>
                        <div class="mota">
                            <?php if(isset($_POST['comment'])){echo $row['comment'];} else{echo $row['comment'];}?>"
                        </div>
                    </div>
                        <input type="submit" name="submit" value="Thêm sản phẩm vào giỏ hàng">
                </form>
            </div>
        </div>