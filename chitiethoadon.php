<div class="giohang">
<form method="post" class="form"> 
      
    <table class="table">       
        <?php
        if(isset($_SESSION['chitiet'])){
            $chitiet = $_SESSION['chitiet'];
            $sql="SELECT DISTINCT * FROM hoadon WHERE chi_tiet_hd LIKE '$chitiet' ORDER BY ID DESC";
                    $query=mysqli_query($dbConnect,$sql);
                    while($row=mysqli_fetch_array($query)){  
                        $totalprice=$row['gia_tien'];
                    ?> 
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Mã hóa đơn: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $row['ID'] ?></div></td>   
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Chi tiết HĐ: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $row['chi_tiet_hd'] ?></div></td>   
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Tổng giá: </div></td>
                        <td colspan="5"><adiv class="chitietphai"><?php echo $totalprice; ?> VNĐ</div></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Số điện thoại: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $row['sdt']; ?></div></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Địa chỉ: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $row['diachi']; ?></div></td>
                    </tr>
                    <?php
                    break;
                    }
                unset($_SESSION['chitiet']);
                }
            elseif(isset($_GET['ID'])){
                $ID = $_GET['ID'];
                $sql="SELECT DISTINCT * FROM hoadon WHERE ID LIKE '$ID' ORDER BY ID DESC";
                    $query=mysqli_query($dbConnect,$sql);
                    while($row=mysqli_fetch_array($query)){  
                        $totalprice=$row['gia_tien'];
                    ?> 
                    <tr>
                    <td colspan="1" class="bentrai"><div class="chitiettrai">Mã hóa đơn: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $row['ID'] ?></div></td>   
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Chi tiết HĐ: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $row['chi_tiet_hd'] ?></div></td>   
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Tổng giá: </div></td>
                        <td colspan="5"><adiv class="chitietphai"><?php echo $totalprice; ?> VNĐ</div></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Số điện thoại: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $row['sdt']; ?></div></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="bentrai"><div class="chitiettrai">Địa chỉ: </div></td>
                        <td colspan="5"><div class="chitietphai"><?php echo $row['diachi']; ?></div></td>
                    </tr>
                    <?php
                    }
            }
        ?> 
    </table>
</form> 
</div>