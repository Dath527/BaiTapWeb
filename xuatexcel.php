<?php
require('Classes/PHPExcel.php');
if(isset($_POST['btnXuatExcel'])){
        $objExcel = new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSSP');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'ID');
        $sheet->setCellValue('B'.$rowCount,'tên sản phẩm');
        $sheet->setCellValue('C'.$rowCount,'giá sản phẩm');
        $sheet->setCellValue('D'.$rowCount,'ID điện thoại');
        $sheet->setCellValue('E'.$rowCount,'File ảnh');
        $sheet->setCellValue('F'.$rowCount,'Số lượng');
        $sheet->setCellValue('G'.$rowCount,'comment');
        //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
        $sql = "SELECT * FROM sanpham
            INNER JOIN dmdienthoai
            ON sanpham.id_dienthoai = dmdienthoai.id_dienthoai
            ORDER BY id_sp DESC";
        $kq = mysqli_query($dbConnect, $sql);

        while($row=mysqli_fetch_array($kq))
        {
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount,$row['id_sp']);
            $sheet->setCellValue('B'.$rowCount,$row['ten_sp']);
            $sheet->setCellValue('C'.$rowCount,$row['gia_sp']);
            $sheet->setCellValue('D'.$rowCount,$row['id_dienthoai']);
            $sheet->setCellValue('E'.$rowCount,$row['anh_sp']);
            $sheet->setCellValue('F'.$rowCount,$row['so_luong']);
            $sheet->setCellValue('G'.$rowCount,$row['comment']);
        }   

        $objWriter= new PHPExcel_Writer_Excel2007($objExcel);
        $fileName='ExportExcel.xlsx';
        $objWriter->save($fileName);
        header('Content-Disposition: attachment; filename="'.$fileName.'"');
        header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
        header('Content-Length: '.filesize($fileName));
        header('Content-Transfer-Encoding:binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        ob_clean();
        flush();
        readfile($fileName);
        return;
    }
if(isset($_POST['btnNhapExcel'])){
    if($_FILES['fileExcel']['tmp_name'] == ''){
        $error_fileExcel = '<span style="color:red;">(*)</span>';
    }
    else{
        $file = $_FILES['fileExcel']['tmp_name'];

        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader->SetLoadSheetsOnly('DSSP');

        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray(true,true,true,true,true,true,null);

        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        for($row = 2; $row <=$highestRow; $row++){
            $id_sp = $sheetData[$row]['A'];
            $ten_sp = $sheetData[$row]['B'];
            $gia_sp = $sheetData[$row]['C'];
            $id_dienthoai = $sheetData[$row]['D'];
            $anh_sp = $sheetData[$row]['E'];
            $so_luong = $sheetData[$row]['F'];
            $comment = $sheetData[$row]['G'];

            $import = "INSERT INTO sanpham(id_sp, ten_sp, gia_sp, id_dienthoai, anh_sp, so_luong, comment) 
                                VALUES ($id_sp,'$ten_sp',$gia_sp,$id_dienthoai,'$anh_sp',$so_luong,'$comment')";
            $nhapexcel = mysqli_query($dbConnect, $import);
        }
    }
}
?>