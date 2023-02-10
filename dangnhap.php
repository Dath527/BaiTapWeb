<?php
    // $_SESSION['loginTimes'] = 0;

    if (isset($_SESSION['auth'])) {
        header('location:trangchu.php');
    }
    if(isset($_SESSION['tk']) && isset($_SESSION['mk'])){
        header('location:trangchu.php');
    };

?>
    <?php
        if(isset($_POST['submit'])){
            $error = NULL;
            // Bẫy lỗi để trống cho trường nhập tên Tài khoản
            if($_POST['tk'] == ''){
                $error = 'Vui lòng nhập đầy đủ Tài khoản & Mật khẩu!';
            }
            else{
                $tk = $_POST['tk'];
            }
            // Bẫy lỗi để trống cho trường nhập Mật khẩu
            if($_POST['mk'] == ''){
                $error = 'Vui lòng nhập đầy đủ Tài khoản & Mật khẩu!';
            }
            else{
                $mk = $_POST['mk'];
            }
            // Dữ liệu được nhập đầy đủ thì mới xử lý Đăng nhập
            if(isset($tk) && isset($mk)){
                    // Kiểm tra Tài khoản với các thông tin nhận được ở trên trong CSDL
                    $sql = "SELECT * FROM thanhvien WHERE tai_khoan = '$tk' AND
                    mat_khau = '$mk'";
                    $query = mysqli_query($dbConnect, $sql);
                    $totalRows = mysqli_num_rows($query);
                    $row = mysqli_fetch_array($query);
                    // Không có kết quả thì báo lỗi ngược lại Tạo phiên Đăng nhập cho Tài khoản
                    // $_SESSION['loginTimes'] = 0;
                if($totalRows <= 0){
                    // đăng nhập sai
                    if (isset($_SESSION['loginTimes'])) {
                        $_SESSION['loginTimes']++;
                    } else {
                        $_SESSION['loginTimes'] = 1;
                    }
                    if ($_SESSION['loginTimes'] < 3) {
                        $error = 'bạn đã nhập sai tk hoặc mk lần ' . $_SESSION['loginTimes'] . ', bạn còn ' . 3 - $_SESSION['loginTimes'] . ' lần nhập';
                    } else {
                        $error = 'Bạn đã đăng nhập sai quá 3 lần. Vui lòng thử lại sau.';
                    }
                } else{
                    $_SESSION['tk'] = $tk;
                    $_SESSION['mk'] = $mk;
                    $_SESSION['auth'] = $row['quyen_truy_cap'];
                    $_SESSION['loginTimes'] = 0;
                    $_SESSION['diachi'] = $row['diachi'];
                    $_SESSION['sdt'] = $row['sdt'];
                    if($_SESSION['auth']==1){
                        header('location:admin.php');
                    }
                    else header('location:trangchu.php');
                }
            }
        }
    ?>
    <?php
    if(isset($_POST['dangki'])){
        header('location: trangchu.php?page_layout=dangki');
    }
    ?>
    <form method="post">
        <div class="form-login">
                <li><label>tài khoản  </label><input type="text" name="tk" /></li>
                <li><label>mật khẩu </label><input type="password" name="mk" /></li>
                <li><label>ghi nhớ </label><input type="checkbox" name="check" checked="checked" /></li>
                <li><input type="submit" name="submit" value="Đăng nhập"> <input type="submit" name="dangki" value="Đăng kí" /> </li>
        </div>
    </form>
