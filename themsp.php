 <?php

    //bẫy lỗi để trống thông tin
    if(isset($_POST['submit'])){
    if($_POST['ten_sp'] == ''){
        $error_ten_sp = '<span style="color:red;">(*)</span>';
    }
    else{
        $ten_sp = $_POST['ten_sp'];
    }
    if($_POST['gia_sp'] == ''){

        $error_gia_sp = '<span style="color:red;">(*)</span>';

    }
    else{$gia_sp = $_POST['gia_sp'];
        if ($gia_sp <= 0) {
            $error_gia_sp = '<span style="color:red;">(*)</span>';
        }
    }
    if($_POST['so_luong'] == ''){

        $error_so_luong = '<span style="color:red;">(*)</span>';
    }
    else{$so_luong = $_POST['so_luong'];
    if ($so_luong <= 0) {
            $error_so_luong = '<span style="color:red;">(*)</span>';
        }
    }
    if($_FILES['anh_sp']['name'] == ''){
        $error_anh_sp = '<span style="color:red;">(*)</span>';
    }
    else{
        $anh_sp = $_FILES['anh_sp']['name'];
        $tmp = $_FILES['anh_sp']['tmp_name'];
    }
    if($_POST['comment'] == ''){
        $error_comment = '<span style="color:red;">(*)</span>';

    }
    else{
        $comment = $_POST['comment'];
    }

    if($_POST['id_dienthoai'] == 'unselect'){
        $error_id_dienthoai = '<span style="color:red;">(*)</span>';
    }
    else{
        $id_dienthoai = $_POST['id_dienthoai'];


    }
        // $dac_biet = $_POST['dac_biet'];
    }
    
    if(isset($ten_sp) && isset($gia_sp)  && isset($anh_sp) && isset($id_dienthoai) 
        && isset($comment) && isset($so_luong) && $so_luong>0 && $gia_sp>0){
       move_uploaded_file($tmp, 'images/'.$anh_sp);

       $sql = "INSERT INTO sanpham(ten_sp, gia_sp, anh_sp, id_dienthoai, so_luong, comment)
               VALUES('$ten_sp', '$gia_sp', '$anh_sp', '$id_dienthoai','$so_luong' , '$comment')";
       $query = mysqli_query($dbConnect, $sql);
       header('location:trangchu.php?page_layout=dienthoai');

    }
        $sql2 = "SELECT * FROM dmdienthoai";
        $query2 = mysqli_query($dbConnect, $sql2);
?>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="form">
                        <a>Tên sản phẩm</a>
                    <br>
                        <input type="text" name="ten_sp" id="tensp">
                        <?php if(isset($error_ten_sp)){echo$error_ten_sp;}?>
                    <br>
                        <a>Giá sản phẩm</a>
                    <br>    
                        <input type="number" name="gia_sp" id="giasp" onwheel="return false;">
                        <?php if(isset($error_gia_sp)){echo$error_gia_sp;}?>
                    <br>    
                        <label>Nhà cung cấp</label><br>
                        <select name="id_dienthoai">
                            <option value="unselect" selected="selected">Lựa chọn nhà cung cấp</option>
                            <?php while($row = mysqli_fetch_array($query2)){
                                echo '<option value="',$row['id_dienthoai'],'">'; echo $row['ten_dienthoai'],'</option>';
                            }?>
                            <!-- <option value=1>Iphone</option>
                            <option value=2>SamSung</option>
                            <option value=3>Xiaomi</option>
                            <option value=4>OPPO</option>
                            <option value=5>Realme</option>
                            <option value=6>Nokia</option>
                            <option value=7>ViVo</option> -->
                        </select>
                        <?php if(isset($error_id_dienthoai)){echo $error_id_dienthoai;}?>
                    <br>
                        <a>Ảnh sản phẩm</a>
                    <br>
                        <input type="file" name="anh_sp" id="anhsp"><?php if(isset($error_anh_sp)){echo $error_anh_sp;}?>
                    <br>
                        <a>Số lượng</a>
                    <br>
                        <input type="number" name="so_luong" id="soluong"><?php if(isset($error_so_luong)){echo $error_so_luong;}?>
                    <br>
                        <a>Comment</a>
                    <br>
                        <Textarea cols="60" rows="12" name="comment"></Textarea>
                        <?php if(isset($error_comment)){echo $error_comment;}?>
                    <br>
                        <input type="submit" name="submit" value="Thêm mới" />
                        <input type="reset" name="reset" value="Làm mới" />

                </div>
            </form>
        </div>