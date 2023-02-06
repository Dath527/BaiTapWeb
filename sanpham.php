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
                            <?php echo $row['gia_sp'];?> VNĐ
                        </div>
                    </div>
                <?php }?>
                
            </div>
            <p id="pagination"><?php echo $listPage; ?></p>
        </div>